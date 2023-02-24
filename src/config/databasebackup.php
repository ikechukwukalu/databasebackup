<?php

return [
    /**
     * string - local backup command
     */
    'local_backup_command' => env('DB_BACKUP_COMMAND') .
                    env('DB_BACKUP_PATH') . "/" .
                    env('DB_BACKUP_FILE') . "-" .
                    date('Y-m-d_h-m-s') .
                    env('DB_BACKUP_FILE_EXT'),

    /**
     * string - remote backup command
     */
    'remote_backup_command' => "ssh -tt " .
                        env('DB_BACKUP_SSH_USER') . "@" .
                        env('DB_BACKUP_SSH_HOST') . " '" .
                        env('DB_BACKUP_COMMAND') .
                        env('DB_BACKUP_PATH') . "/" .
                        env('DB_BACKUP_FILE') . "-" .
                        date('Y-m-d_h-m-s') .
                        env('DB_BACKUP_FILE_EXT') .
                        " && exit; exec bash -l'",

    /**
     * boolean - Backup db via SSH access
     */
    'remote_access' => env('DB_REMOTE_ACCESS'),
];
