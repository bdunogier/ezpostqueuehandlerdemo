Description
===========

Demonstration of a post handling hook for eZ Publish asynchronous publishing feature:
https://github.com/ezsystems/ezpublish/blob/master/doc/features/4.5/ezasynchronouspublisher.txt

How to install
==============

Clone this repository to <ezpublish>/extension::
    ezpublish/extension $ git clone http://github.com/bdunogier/ezpostqueuehandlerdemo

Enable the extension in settings/override/site.ini.append.php::

    [ExtensionSettings]
    ActiveExtensions=ezpostqueuehandlerdemo

See it in action
================
Enable asynchronous publishing in eZ Publish in a content.ini override::

    <?php /* #?ini charset="utf-8"?

    [PublishingSettings]
    # Enable/Disable the asynchronous publishing feature
    AsynchronousPublishing=enabled

    */ ?>

Start the daemon in interactive mode::

    ezpublish $ php bin/php/ezasynchronouspublisher.php

Note that this example will do nothing in daemon mode, as daemons can't output anything to the console.

Contact
=======

Bertrand Dunogier

email: bd at ez dot no

twitter: @bdunogier