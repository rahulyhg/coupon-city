<?php

    $filesystem = Config::getEnvironment() == 'production' ? 's3' : 'filesystem';

    return [

        /*
        |--------------------------------------------------------------------------
        | Stapler Storage Driver
        |--------------------------------------------------------------------------
        |
        | The default mechanism for handling file storage.  Currently Stapler supports
        | both file system and Amazon S3 as options.
        |
        */

        'storage'        => $filesystem,//'s3',
        /*
        |--------------------------------------------------------------------------
        | Stapler Default Url
        |--------------------------------------------------------------------------
        |
        | The url (relative to your project document root) containing a default image
        | that will be used for attachments that don't currently have an uploaded image
        | attached to them.
        |
        */

        'default_url'    => '/img/picture.png',

        /*
        |--------------------------------------------------------------------------
        | Stapler Default Style
        |--------------------------------------------------------------------------
        |
        | The default style returned from the Stapler file location helper methods.
        | An unaltered version of uploaded file is always stored within the 'original'
        | style, however the default_style can be set to point to any of the defined
        | syles within the styles array.
        |
        */

        'default_style'  => 'normal',

        /*
        |--------------------------------------------------------------------------
        | Keep Old Files Flag
        |--------------------------------------------------------------------------
        |
        | Set this to true in order to prevent older file uploads from being deleted
        | from storage when a record is updated with a new upload.
        |
        */

        'keep_old_files' => FALSE,

        /*
        |--------------------------------------------------------------------------
        | Preserve Files Flag
        |--------------------------------------------------------------------------
        |
        | Set this to true in order to prevent file uploads from being deleted
        | from the file system when an attachment is destroyed.  Essentially this
        | ensures the preservation of uploads event after their corresponding database
        | records have been removed.
        |
        */
        'preserve_files' => FALSE

    ];