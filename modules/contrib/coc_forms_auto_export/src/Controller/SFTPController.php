<?php

namespace Drupal\coc_forms_auto_export\Controller;

use Drupal\Core\Controller\ControllerBase;
use phpseclib3\Net\SFTP;

/**
 * Provides an SFTPController class.
 */
class SFTPController extends ControllerBase {

  /**
   * Send file via SFTP.
   */
  public static function sendFile($sftp_details, $source_path, $file_name, $mode = SFTP::SOURCE_LOCAL_FILE): bool {
    $host = $sftp_details['host'];
    $username = $sftp_details['username'];
    $password = $sftp_details['password'];

    $sftp = new SFTP($host);
    if (!$sftp->login($username, $password)) {
      exit('Login Failed');
    }

    self::createDirectory($sftp, $sftp_details['destination']);
    return $sftp->put($sftp_details['destination'] . '/' . $file_name, $source_path, $mode);
  }

  /**
   * Creates a directory if it doesn't exist.
   */
  public static function createDirectory($sftp, $path): void {
    if (!empty($path)) {
      $entry = $sftp->pwd();
      $directories = explode('/', $path);
      foreach ($directories as $directory) {
        if (!$sftp->is_dir($directory)) {
          $sftp->mkdir($directory);
        }
        $sftp->chdir($directory);
      }
      $sftp->chdir($entry);
    }
  }

}
