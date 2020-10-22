<?php

namespace SlideBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SliderRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SliderRepository extends EntityRepository
{
    public function getPositionMax()
    {
        $qb = $this
            ->createQueryBuilder('a')
            ->select('MAX(a.position)');

        return $qb
            ->getQuery()
            ->getSingleScalarResult();
    }
}
