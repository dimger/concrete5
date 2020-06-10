<?php
namespace Concrete\Core\Backup\ContentImporter\Importer\Routine;

use Concrete\Core\Page\Type\Type;

class ImportPageTypeTargetsRoutine extends AbstractRoutine
{
    public function getHandle()
    {
        return 'page_type_targets';
    }

    public function import(\SimpleXMLElement $sx)
    {
        if (isset($sx->pagetypes)) {
            foreach ($sx->pagetypes->pagetype as $p) {
                Type::importTargets($p);
            }
        }
    }
}
