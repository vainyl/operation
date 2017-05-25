<?php
/**
 * Vainyl
 *
 * PHP Version 7
 *
 * @package   Operation
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://vainyl.com
 */
declare(strict_types=1);

namespace Vainyl\Operation;

use Vainyl\Core\NameableInterface;
use Vainyl\Core\ResultInterface;

/**
 * Interface OperationInterface
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
interface OperationInterface extends NameableInterface
{
    /**
     * @return ResultInterface
     */
    public function execute() : ResultInterface;
}