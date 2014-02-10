<?php
namespace Ibw\JobeetBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Bd\ImhotepBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
    	$cat1 = new Category();
        $cat1->setTitle('Bug');

        $cat2 = new Category();
        $cat2->setTitle('Evolution');

        $cat3 = new Category();
        $cat3->setTitle('Information');

        $cat4 = new Category();
        $cat4->setTitle('Pense-bête');

        



        $em->persist($cat1);
        $em->persist($cat2);
        $em->persist($cat3);
        $em->persist($cat4);
        $em->flush();

        $this->addReference('category-bug', $cat1);
        $this->addReference('category-evolution', $cat2);
        $this->addReference('category-information', $cat3);
        $this->addReference('category-pense-bete', $cat4);
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}