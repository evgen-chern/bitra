<?php
B_PROLOG_INCLUDED === true || die();
require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header_visible.php";
\Bitrix\Main\Page\Asset::getInstance()->addCss("/local/templates/.default/swiper-main.css");
\Bitrix\Main\Page\Asset::getInstance()->addJs("/local/templates/.default/swiper-main.js");
?>
<?php $APPLICATION->ShowViewContent('test_show_view_content');?>
<?php $APPLICATION->ShowProperty('promise');?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"promises", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"FILE_404" => "",
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "promises"
	),
	false
);?>
<div class="mb-5 pb-4">
	<div class="swiper-main">
		<div class="swiper-main__row">
			<div class=" swiper w-100">
				<div class="swiper-wrapper">
					<div class="swiper-main__col swiper-slide"><a class="card-banner" href="javascript:void(0)">
							<div class="card-banner__image">
								<img class="img img_lazy lazyload object-fit-fill"
										src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
										alt="image" data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/card-banner/0.png">
							</div>
							<div class="card-banner__inner">
								<div class="card-banner__name">Диваны и кресла</div>
								<div class="card-banner__description">Новая комбинация для ТВ БЕСТО не просто предмет
									мебели она разработана, также, для мультимедии
								</div>
								<div class="card-banner__bottom">
									<span class="btn btn-white rounded-pill fw-semibold">
										<span class="px-2">
											Подробнее
											<i class="fa-solid fa-chevron-right ms-2"></i>
										</span>
									</span>
								</div>
							</div>
						</a></div>
					<div class="swiper-main__col swiper-slide"><a class="card-banner" href="javascript:void(0)">
							<div class="card-banner__image">
								<img class="img img_lazy lazyload object-fit-fill"
										src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
										alt="image" data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/card-banner/1.png">
							</div>
							<div class="card-banner__inner">
								<div class="card-banner__name">Новинки мебели для дома на выставке в Москве</div>
								<div class="card-banner__description">Новая комбинация для ТВ БЕСТО не просто предмет
									мебели она разработана, также, для мультимедии
								</div>
								<div class="card-banner__bottom">
									<span class="btn btn-white rounded-pill fw-semibold">
										<span class="px-2">
											Подробнее
											<i class="fa-solid fa-chevron-right ms-2"></i>
										</span>
									</span>
								</div>
							</div>
						</a></div>
				</div>
				<div class="swiper-button-prev fa-solid fa-chevron-left d-none d-xl-block"></div>
				<div class="swiper-button-next fa-solid fa-chevron-right d-none d-xl-block"></div>
			</div>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</div>
<div class="mb-5 pb-4">
	<h3 class="mb-4 pb-3">Популярные разделы</h3>
	<div class="swiper-sections">
		<div class="swiper-sections__row">
			<div class=" swiper w-100">
				<div class="swiper-wrapper">
					<div class="swiper-sections__col swiper-slide"><a class="catalog-section" href="javascript:void(0)">
							<div class="image image_size_170x170 text-center">
								<div class="image__inner">
									<img class="img img_lazy lazyload"
											src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
											alt="image"
											data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/catalog-sections/0.png">
								</div>
							</div>
							<div class="catalog-section__name">Диваны</div>
						</a></div>
					<div class="swiper-sections__col swiper-slide"><a class="catalog-section" href="javascript:void(0)">
							<div class="image image_size_170x170 text-center">
								<div class="image__inner">
									<img class="img img_lazy lazyload"
											src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
											alt="image"
											data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/catalog-sections/1.png">
								</div>
							</div>
							<div class="catalog-section__name">Кресла</div>
						</a></div>
					<div class="swiper-sections__col swiper-slide"><a class="catalog-section" href="javascript:void(0)">
							<div class="image image_size_170x170 text-center">
								<div class="image__inner">
									<img class="img img_lazy lazyload"
											src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
											alt="image"
											data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/catalog-sections/2.png">
								</div>
							</div>
							<div class="catalog-section__name">Кровати</div>
						</a></div>
					<div class="swiper-sections__col swiper-slide"><a class="catalog-section" href="javascript:void(0)">
							<div class="image image_size_170x170 text-center">
								<div class="image__inner">
									<img class="img img_lazy lazyload"
											src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
											alt="image"
											data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/catalog-sections/3.png">
								</div>
							</div>
							<div class="catalog-section__name">Столы</div>
						</a></div>
					<div class="swiper-sections__col swiper-slide"><a class="catalog-section" href="javascript:void(0)">
							<div class="image image_size_170x170 text-center">
								<div class="image__inner">
									<img class="img img_lazy lazyload"
											src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
											alt="image"
											data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/catalog-sections/4.png">
								</div>
							</div>
							<div class="catalog-section__name">Комоды</div>
						</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="mb-5 pb-4">
	<h3 class="mb-4 pb-3">Хиты продаж</h3>
	<div class="swiper-product">
		<div class="swiper-product__row">
			<div class=" swiper w-100">
				<div class="swiper-wrapper">
					<div class="swiper-product__col swiper-slide"><a class="catalog-product" href="javascript:void(0)">
							<div class="image image_size_410x190 text-center">
								<div class="image__inner">
									<img class="img img_lazy lazyload"
											src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
											alt="image"
											data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/catalog-product/0.png">
								</div>
							</div>
							<div class="catalog-product__name">Диван угловой тканевый Мускари</div>
							<div class="catalog-product__price">32 300 ₽</div>
						</a></div>
					<div class="swiper-product__col swiper-slide"><a class="catalog-product" href="javascript:void(0)">
							<div class="image image_size_410x190 text-center">
								<div class="image__inner">
									<img class="img img_lazy lazyload"
											src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
											alt="image"
											data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/catalog-product/1.png">
								</div>
							</div>
							<div class="catalog-product__name">Диван угловой тканевый Мускари</div>
							<div class="catalog-product__price" data-badge="20%">32 300 ₽
								<del>40 900 ₽</del>
							</div>
						</a></div>
					<div class="swiper-product__col swiper-slide"><a class="catalog-product" href="javascript:void(0)">
							<div class="image image_size_410x190 text-center">
								<div class="image__inner">
									<img class="img img_lazy lazyload"
											src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
											alt="image"
											data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/catalog-product/2.png">
								</div>
							</div>
							<div class="catalog-product__name">Кровать Белла 160*200 велюр Monolit латте</div>
							<div class="catalog-product__price">32 300 ₽</div>
						</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="mb-5 pb-4">
	<h3 class="mb-4 pb-3">Новости</h3>
	<div class="swiper-news">
		<div class="swiper-news__row">
			<div class=" swiper w-100">
				<div class="swiper-wrapper">
					<div class="swiper-news__col swiper-slide"><a class="card-news" href="javascript:void(0)">
							<div class="card-news__image">
								<div class="image image_size_630x320">
									<div class="image__inner">
										<img class="img img_lazy lazyload object-fit-cover"
												src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
												alt="image"
												data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/card-news/0.png">
									</div>
								</div>
							</div>
							<div class="card-news__inner">
								<div class="card-news__date">30 августа 2023</div>
								<div class="card-news__body">
									<h4 class="card-news__name mt-0 mb-4 fw-normal">
										Открытие шоу-рума на Невском проспекте
									</h4>
								</div>
								<div class="card-news__bottom">
									<span class="btn btn-white rounded-pill fw-semibold">
										<span class="px-2">
											Подробнее
											<i class="fa-solid fa-chevron-right ms-2"></i>
										</span>
									</span>
								</div>
							</div>
						</a></div>
					<div class="swiper-news__col swiper-slide"><a class="card-news" href="javascript:void(0)">
							<div class="card-news__image">
								<div class="image image_size_630x320">
									<div class="image__inner">
										<img class="img img_lazy lazyload object-fit-cover"
												src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
												alt="image"
												data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/card-news/1.png">
									</div>
								</div>
							</div>
							<div class="card-news__inner">
								<div class="card-news__date">30 августа 2023</div>
								<div class="card-news__body">
									<h4 class="card-news__name mt-0 mb-4 fw-normal">
										Новинки мебели для дома на выставке в Москве
									</h4>
								</div>
								<div class="card-news__bottom">
									<span class="btn btn-white rounded-pill fw-semibold">
										<span class="px-2">
											Подробнее
											<i class="fa-solid fa-chevron-right ms-2"></i>
										</span>
									</span>
								</div>
							</div>
						</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="mb-5 pb-4">
	<div class="mb-4 pb-3 d-flex align-items-center justify-content-between">
		<h3 class="m-0 p-0">Отзывы</h3>
		<a class="a link-gray text-decoration-none" href="javascript:void(0)">Смотреть все</a>
	</div>
	<div class="swiper-reviews">
		<div class="swiper-reviews__row">
			<div class=" swiper w-100">
				<div class="swiper-wrapper">
					<div class="swiper-reviews__col swiper-slide"><a class="card-review" href="javascript:void(0)">
							<div class="card-review__user">
								<div class="card-review__image">
									<div class="image image_size_56x56 text-center">
										<div class="image__inner">
											<img class="img img_lazy lazyload"
													src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
													alt="image"
													data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/card-review/0.png">
										</div>
									</div>
								</div>
								<div class="card-review__body">
									<div class="card-review__name">Александр П.</div>
									<div class="card-review__rating">
										<div class="fa-solid fa-star"></div>
										<div class="fa-solid fa-star"></div>
										<div class="fa-solid fa-star"></div>
										<div class="fa-regular fa-star"></div>
										<div class="fa-regular fa-star"></div>
									</div>
								</div>
							</div>
							<div class="card-review__description">Очень красивый диван, заказывали в ткани шайм вайн,
								красота. На странице товара он из серого кожзама, но решили рискнуть и взять в цветочек,
								обивка шикарная!Доставили сегодня, единственный минус, доставка в центр только в но
							</div>
							<div class="card-review__date">30 августа 2023, Екатеринбург</div>
						</a></div>
					<div class="swiper-reviews__col swiper-slide"><a class="card-review" href="javascript:void(0)">
							<div class="card-review__user">
								<div class="card-review__image">
									<div class="image image_size_56x56 text-center">
										<div class="image__inner">
											<img class="img img_lazy lazyload"
													src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
													alt="image"
													data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/card-review/1.png">
										</div>
									</div>
								</div>
								<div class="card-review__body">
									<div class="card-review__name">Алексей Д.</div>
									<div class="card-review__rating">
										<div class="fa-solid fa-star"></div>
										<div class="fa-solid fa-star"></div>
										<div class="fa-solid fa-star"></div>
										<div class="fa-regular fa-star"></div>
										<div class="fa-regular fa-star"></div>
									</div>
								</div>
							</div>
							<div class="card-review__description">Очень красивый диван, заказывали в ткани шайм вайн,
								красота. На странице товара он из серого кожзама, но решили рискнуть и взять в цветочек,
								обивка шикарная!Доставили сегодня, единственный минус, доставка в центр только в но
							</div>
							<div class="card-review__date">30 августа 2023, Екатеринбург</div>
						</a></div>
					<div class="swiper-reviews__col swiper-slide"><a class="card-review" href="javascript:void(0)">
							<div class="card-review__user">
								<div class="card-review__image">
									<div class="image image_size_56x56 text-center">
										<div class="image__inner">
											<img class="img img_lazy lazyload"
													src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
													alt="image"
													data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/card-review/2.png">
										</div>
									</div>
								</div>
								<div class="card-review__body">
									<div class="card-review__name">Анастасия И.</div>
									<div class="card-review__rating">
										<div class="fa-solid fa-star"></div>
										<div class="fa-solid fa-star"></div>
										<div class="fa-solid fa-star"></div>
										<div class="fa-regular fa-star"></div>
										<div class="fa-regular fa-star"></div>
									</div>
								</div>
							</div>
							<div class="card-review__description">Очень красивый диван, заказывали в ткани шайм вайн,
								красота. На странице товара он из серого кожзама, но решили рискнуть и взять в цветочек,
								обивка шикарная!Доставили сегодня, единственный минус, доставка в центр только в но
							</div>
							<div class="card-review__date">30 августа 2023, Екатеринбург</div>
						</a></div>
					<div class="swiper-reviews__col swiper-slide"><a class="card-review" href="javascript:void(0)">
							<div class="card-review__user">
								<div class="card-review__image">
									<div class="image image_size_56x56 text-center">
										<div class="image__inner">
											<img class="img img_lazy lazyload"
													src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
													alt="image"
													data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/card-review/0.png">
										</div>
									</div>
								</div>
								<div class="card-review__body">
									<div class="card-review__name">Василий Ю.</div>
									<div class="card-review__rating">
										<div class="fa-solid fa-star"></div>
										<div class="fa-solid fa-star"></div>
										<div class="fa-solid fa-star"></div>
										<div class="fa-regular fa-star"></div>
										<div class="fa-regular fa-star"></div>
									</div>
								</div>
							</div>
							<div class="card-review__description">Очень красивый диван, заказывали в ткани шайм вайн,
								красота. На странице товара он из серого кожзама, но решили рискнуть и взять в цветочек,
								обивка шикарная!Доставили сегодня, единственный минус, доставка в центр только в но
							</div>
							<div class="card-review__date">30 августа 2023, Екатеринбург</div>
						</a></div>
				</div>
			</div>
		</div>
		<div class="swiper-button-prev fa-solid fa-chevron-left d-none d-xl-block"></div>
		<div class="swiper-button-next fa-solid fa-chevron-right d-none d-xl-block"></div>
	</div>
</div>