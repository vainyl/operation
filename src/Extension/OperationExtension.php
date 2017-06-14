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

use Vainyl\Core\Extension\AbstractExtension;

/**
 * Class OperationExtension
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class OperationExtension extends AbstractExtension
{
    /**
     * @inheritDoc
     */
    public function getCompilerPasses(): array
    {
        return [];
    }
}