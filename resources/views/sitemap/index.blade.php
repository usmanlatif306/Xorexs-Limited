<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<?php echo '<?xml-stylesheet type="text/xsl" href="' . asset("css/sitemap.xsl") . '"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	{{-- pages sitemap --}}
	@foreach ($data['pages'] as $name => $page)
	<url>
		<loc>{{ route($page['route']) }}</loc>
		
		@if($page['updated_at'])
		<lastmod>{{ $page['updated_at']->tz('UTC')->toAtomString() }}</lastmod>
		@endif
	</url>
	@endforeach
</urlset>