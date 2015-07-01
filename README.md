# ScheduleBundle

## Install

* add to bundle to src/ folder

* update app/AppKernal.php, add following to $bundles = array()

    <blockquote>new ScheduleBundle\ScheduleBundle(),</blockquote>

## Running CronTask

php app/console crontasks:run

*Run every five minutes*
*/5 * * * * php /var/www/your-project/app/console crontasks:run

### Source

Taken from https://inuits.eu/blog/creating-automated-interval-based-cron-tasks-symfony2
