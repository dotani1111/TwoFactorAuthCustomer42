<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\TwoFactorAuthCustomer42\Repository;

use Doctrine\Persistence\ManagerRegistry;
use Eccube\Repository\AbstractRepository;
use Plugin\TwoFactorAuthCustomer42\Entity\TwoFactorAuthType;

/**
 * TwoFactorAuthTypeRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TwoFactorAuthTypeRepository extends AbstractRepository
{
    /**
     * TwoFactorAuthConfigRepository constructor.
     *
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TwoFactorAuthType::class);
    }

    /**
     * @return $result
     */
    public function findOne()
    {
        return $this->findOneBy([], ['id' => 'DESC']);
    }
}
