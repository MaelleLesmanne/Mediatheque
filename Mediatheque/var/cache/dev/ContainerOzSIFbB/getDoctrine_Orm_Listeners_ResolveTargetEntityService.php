<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.listeners.resolve_target_entity' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/ResolveTargetEntityListener.php';

$this->privates['doctrine.orm.listeners.resolve_target_entity'] = $instance = new \Doctrine\ORM\Tools\ResolveTargetEntityListener();

$instance->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\OrderInterface', 'App\\Entity\\Order\\Order', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\OrderItemInterface', 'App\\Entity\\Order\\OrderItem', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\OrderItemUnitInterface', 'App\\Entity\\Order\\OrderItemUnit', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\OrderSequenceInterface', 'App\\Entity\\Order\\OrderSequence', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\AdjustmentInterface', 'App\\Entity\\Order\\Adjustment', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Currency\\Model\\CurrencyInterface', 'App\\Entity\\Currency\\Currency', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Currency\\Model\\ExchangeRateInterface', 'App\\Entity\\Currency\\ExchangeRate', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Locale\\Model\\LocaleInterface', 'App\\Entity\\Locale\\Locale', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductInterface', 'App\\Entity\\Product\\Product', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductTranslationInterface', 'App\\Entity\\Product\\ProductTranslation', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductVariantInterface', 'App\\Entity\\Product\\ProductVariant', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductVariantTranslationInterface', 'App\\Entity\\Product\\ProductVariantTranslation', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductOptionInterface', 'App\\Entity\\Product\\ProductOption', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductOptionTranslationInterface', 'App\\Entity\\Product\\ProductOptionTranslation', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAssociationTypeInterface', 'App\\Entity\\Product\\ProductAssociationType', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslationInterface', 'App\\Entity\\Product\\ProductAssociationTypeTranslation', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductOptionValueInterface', 'App\\Entity\\Product\\ProductOptionValue', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductOptionValueTranslationInterface', 'App\\Entity\\Product\\ProductOptionValueTranslation', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAssociationInterface', 'App\\Entity\\Product\\ProductAssociation', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Channel\\Model\\ChannelInterface', 'App\\Entity\\Channel\\Channel', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAttributeInterface', 'App\\Entity\\Product\\ProductAttribute', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAttributeTranslationInterface', 'App\\Entity\\Product\\ProductAttributeTranslation', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAttributeValueInterface', 'App\\Entity\\Product\\ProductAttributeValue', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Taxation\\Model\\TaxRateInterface', 'App\\Entity\\Taxation\\TaxRate', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Taxation\\Model\\TaxCategoryInterface', 'App\\Entity\\Taxation\\TaxCategory', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShipmentInterface', 'App\\Entity\\Shipping\\Shipment', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShipmentUnitInterface', 'App\\Entity\\Order\\OrderItemUnit', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShippingMethodInterface', 'App\\Entity\\Shipping\\ShippingMethod', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslationInterface', 'App\\Entity\\Shipping\\ShippingMethodTranslation', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShippingCategoryInterface', 'App\\Entity\\Shipping\\ShippingCategory', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Payment\\Model\\PaymentInterface', 'App\\Entity\\Payment\\Payment', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Payment\\Model\\PaymentMethodInterface', 'App\\Entity\\Payment\\PaymentMethod', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Payment\\Model\\PaymentMethodTranslationInterface', 'App\\Entity\\Payment\\PaymentMethodTranslation', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Promotion\\Model\\PromotionInterface', 'App\\Entity\\Promotion\\Promotion', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Promotion\\Model\\PromotionCouponInterface', 'App\\Entity\\Promotion\\PromotionCoupon', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Promotion\\Model\\PromotionRuleInterface', 'App\\Entity\\Promotion\\PromotionRule', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Promotion\\Model\\PromotionActionInterface', 'App\\Entity\\Promotion\\PromotionAction', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\AddressInterface', 'App\\Entity\\Addressing\\Address', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\CountryInterface', 'App\\Entity\\Addressing\\Country', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\ProvinceInterface', 'App\\Entity\\Addressing\\Province', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\ZoneInterface', 'App\\Entity\\Addressing\\Zone', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\ZoneMemberInterface', 'App\\Entity\\Addressing\\ZoneMember', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Inventory\\Model\\InventoryUnitInterface', 'App\\Entity\\Order\\OrderItemUnit', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Taxonomy\\Model\\TaxonInterface', 'App\\Entity\\Taxonomy\\Taxon', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Taxonomy\\Model\\TaxonTranslationInterface', 'App\\Entity\\Taxonomy\\TaxonTranslation', []);
$instance->addResolveTargetEntity('Sylius\\Component\\User\\Model\\UserInterface', 'App\\Entity\\User\\ShopUser', []);
$instance->addResolveTargetEntity('Sylius\\Component\\User\\Model\\UserOAuthInterface', 'App\\Entity\\User\\UserOAuth', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Customer\\Model\\CustomerInterface', 'App\\Entity\\Customer\\Customer', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Customer\\Model\\CustomerGroupInterface', 'App\\Entity\\Customer\\CustomerGroup', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Review\\Model\\ReviewInterface', 'App\\Entity\\Product\\ProductReview', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Review\\Model\\ReviewerInterface', 'App\\Entity\\Customer\\Customer', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ProductTaxonInterface', 'App\\Entity\\Product\\ProductTaxon', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ProductImageInterface', 'App\\Entity\\Product\\ProductImage', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\TaxonImageInterface', 'App\\Entity\\Taxonomy\\TaxonImage', []);
$instance->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ChannelPricingInterface', 'App\\Entity\\Channel\\ChannelPricing', []);
$instance->addResolveTargetEntity('Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityTokenInterface', 'App\\Entity\\Payment\\PaymentSecurityToken', []);
$instance->addResolveTargetEntity('Sylius\\Bundle\\PayumBundle\\Model\\GatewayConfigInterface', 'App\\Entity\\Payment\\GatewayConfig', []);
$instance->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\UserInterface', 'App\\Entity\\User\\AdminUser', []);
$instance->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\ClientInterface', 'App\\Entity\\AdminApi\\Client', []);
$instance->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\AccessTokenInterface', 'App\\Entity\\AdminApi\\AccessToken', []);
$instance->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\RefreshTokenInterface', 'App\\Entity\\AdminApi\\RefreshToken', []);
$instance->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\AuthCodeInterface', 'App\\Entity\\AdminApi\\AuthCode', []);

return $instance;
