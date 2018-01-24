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

namespace Vainyl\Operation\Collection;

use Vainyl\Core\Composite\CompositeResult;
use Vainyl\Core\ResultInterface;
use Vainyl\Operation\OperationInterface;

/**
 * Class OperationSet
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class OperationSet extends AbstractCollection
{
    /**
     * @inheritDoc
     */
    public function execute(): ResultInterface
    {
        $results = [];
        /**
         * @var OperationInterface $operation
         */
        foreach ($this->getOperations() as $operation) {
            $results[] = $operation->execute();
        }

        return new CompositeResult($results);
    }
}
