<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;
$params = $displayData->params;

$imageCssClass = 'card-img-top';
?>
<?php $images = json_decode($displayData->images); ?>

<?php if (isset($images->image_intro) && !empty($images->image_intro)) : ?>
	<?php $imgfloat = empty($images->float_intro) ? $params->get('float_intro') : $images->float_intro; ?>

	<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
		<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($displayData->slug, $displayData->catid, $displayData->language)); ?>">
			<img
				<?php if ($images->image_intro_caption) : ?>
					<?php $imageCssClass .= ' caption'; ?>
					<?php echo 'title="' . htmlspecialchars($images->image_intro_caption) . '" '; ?>
				<?php endif; ?>
				class="<?php echo $imageCssClass; ?>" src="<?php echo htmlspecialchars($images->image_intro, ENT_COMPAT, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt, ENT_COMPAT, 'UTF-8'); ?>" itemprop="thumbnailUrl"
			/>
		</a>
	<?php else : ?>
		<img
			<?php if ($images->image_intro_caption) : ?>
				<?php $imageCssClass .= ' caption'; ?>
				<?php echo 'title="' . htmlspecialchars($images->image_intro_caption) . '" '; ?>
			<?php endif; ?>
			class="<?php echo $imageCssClass; ?>" src="<?php echo htmlspecialchars($images->image_intro, ENT_COMPAT, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt, ENT_COMPAT, 'UTF-8'); ?>" itemprop="thumbnailUrl"
		/>
	<?php endif; ?>

<?php else : ?>
	<img class="<?php echo $imageCssClass; ?>" src="/images/news/news-generic-thumb.jpg" alt="News" itemprop="thumbnailUrl" />

<?php endif; ?>
