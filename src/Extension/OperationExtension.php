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

namespace Vainyl\Operation\Extension;

use Vainyl\Core\Extension\AbstractFrameworkExtension;

/**
 * Class OperationExtension
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class OperationExtension extends AbstractFrameworkExtension
{
    /**
     * @inheritDoc
     */
    public function getCompilerPasses(): array
    {
        return [];
    }
}