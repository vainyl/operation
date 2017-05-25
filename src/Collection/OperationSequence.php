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
 * Class OperationSequence
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class OperationSequence extends AbstractCollection
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
            $result = $operation->execute();
            $results[] = $result;
            if (false === $result->isSuccessful()) {
                return new CompositeResult($results);
            }
        }

        return new CompositeResult($results);
    }
}