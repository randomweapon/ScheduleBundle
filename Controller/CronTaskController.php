<?php namespace ScheduleBundle\Controller;

use ScheduleBundle\Entity\CronTask;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/crontasks")
 */
class CronTaskController extends Controller
{
    /**
     * @Route("/test", name="your_examplebundle_crontasks_test")
     */
    public function testAction()
    {
        $entity = new CronTask();

        $entity
            ->setName('Example asset symlinking task')
            ->setInterval(3600) // Run once every hour
            ->setCommands(array(
                'test:run'
            ));

        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        return new Response('OK!');
    }

    public function saveAction($name, $comment, $interval = 3600)
    {

    }

    public function outputAction()
    {
        return "outputing";
    }
}
