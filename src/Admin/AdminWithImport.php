<?php

namespace KunicMarko\SonataImporterBundle\Admin;

/**
 * @author Marko Kunic <kunicmarko20@gmail.com>
 */
interface AdminWithImport
{
    public function getImportClasses(): array;
}