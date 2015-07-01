# ScheduleBundle

The purpose of this is to have a single cron call for multiple commands.

For this to work it requires that you have created a console command within your application (or multiple)

<a href="http://symfony.com/doc/master/cookbook/console/console_command.html">http://symfony.com/doc/master/cookbook/console/console_command.html</a>

## Install

1. add to bundle to src/ folder

2. update app/AppKernal.php, add following to $bundles = array()

    <pre>new ScheduleBundle\ScheduleBundle(),</pre>

    This is to enable the bundle within your application.

## Running CronTask

from the application root (within terminal) run the following command

<pre>php app/console crontasks:run</pre>

**Run every five minutes**

Add the following file (changing the project path) to your crontab to run every 5mins.

<pre>*/5 * * * * php /var/www/your-project/app/console crontasks:run</pre>

### Source

Taken from <a href="https://inuits.eu/blog/creating-automated-interval-based-cron-tasks-symfony2">https://inuits.eu/blog/creating-automated-interval-based-cron-tasks-symfony2</a>
