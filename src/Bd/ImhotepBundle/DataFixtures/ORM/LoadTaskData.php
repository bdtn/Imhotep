<?php
namespace Ibw\JobeetBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Bd\ImhotepBundle\Entity\Task;

class LoadTaskData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
    	$task1 = new Category();
        $task1->setTitle('Back-Office');
        $task1->setDescription('Back-Office');


        $task2 = new Category();
        $task2->setTitle('Dossier agricole et rural');
        $task2->setDescription('Dossier agricole et rural');


        $task3 = new Category();
        $task3->setTitle('Dossier agricole et rural (SPRINT 3)');
        $task3->setDescription('Dossier agricole et rural (SPRINT 3)');

        $task4 = new Category();
        $task4->setTitle('Décision programme');
        $task4->setDescription('Décision programme');


        



        $em->persist($task1);
        $em->persist($task2);
        $em->persist($task3);
        $em->persist($task4);
        $em->flush();

        $this->addReference('task-bo', $task1);
        $this->addReference('task-dar', $task2);
        $this->addReference('task-dar3', $task3);
        $this->addReference('task-dp', $task4);
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}