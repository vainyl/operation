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

use Vainyl\Core\AbstractIdentifiable;

/**
 * Class AbstractOperation
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
abstract class AbstractOperation extends AbstractIdentifiable implements OperationInterface
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}