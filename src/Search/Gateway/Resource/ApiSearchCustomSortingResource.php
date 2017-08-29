<?php declare(strict_types=1);

namespace Shopware\Search\Gateway\Resource;

use Shopware\Framework\Api2\ApiFlag\Required;
use Shopware\Framework\Api2\Field\FkField;
use Shopware\Framework\Api2\Field\ReferenceField;
use Shopware\Framework\Api2\Field\SubresourceField;
use Shopware\Framework\Api2\Field\TranslatedField;
use Shopware\Framework\Api2\Field\UuidField;

class ApiSearchCustomSortingResource extends ApiResource
{
    public function __construct()
    {
        parent::__construct('s_search_custom_sorting');
        
        $this->fields['label'] = (new StringField('label'))->setFlags(new Required());
        $this->fields['active'] = (new BoolField('active'))->setFlags(new Required());
        $this->fields['displayInCategories'] = (new IntField('display_in_categories'))->setFlags(new Required());
        $this->fields['position'] = (new IntField('position'))->setFlags(new Required());
        $this->fields['sortings'] = (new LongTextField('sortings'))->setFlags(new Required());
        
        
//        $this->primaryKeyFields['uuid'] = (new UuidField('uuid'))->setFlags(new Required());
//        $this->fields['name'] = new TranslatedField('name', ApiResourceShop::class, 'uuid');
//        $this->fields['description'] = new TranslatedField('description', ApiResourceShop::class, 'uuid');
//        $this->fields['descriptionLong'] = new TranslatedField('descriptionLong', ApiResourceShop::class, 'uuid');
//        $this->fields['productManufacturer'] = new ReferenceField('productManufacturerUuid', 'uuid', ApiResourceProductManufacturer::class);
//        $this->fields['productManufacturerUuid'] = new FkField('product_manufacturer_uuid', ApiResourceProductManufacturer::class, 'uuid');
//        $this->fields['taxUuid'] = new FKField('tax_uuid', ApiResourceTax::class, 'uuid');
//        $this->fields['details'] = new SubresourceField(ApiResourceProductDetail::class);
//        $this->fields['translations'] = (new SubresourceField(ApiResourceProductTranslation::class, 'languageUuid'))->setFlags(new Required());
    }
}