<?php
	add_action( 'theme_js', 'popup_search_1_0_0' );
	function popup_search_1_0_0(){
		echo '
			<script>
				function checkSearch(){var x;if(""==document.forms.searchform.s.value)return alert("Vui lòng nhập từ khóa cần tìm !"),!1}
			</script>
		';
	}		
?>
<style>
	a {
		text-decoration: none
	}

	.popupSearch_1_0_0__title {
		text-align: center;
		color: #004689;
		text-transform: uppercase;
		font-weight: 600;
		font-size: 20px
	}

	.popupSearch_1_0_0__search {
		width: 90%;
		margin: 20px auto;
		position: relative
	}

	.popupSearch_1_0_0__search input {
		width: 100%;
		padding: 5px 40px 5px 10px;
		border-radius: 4px;
		border: 1px solid #248de8;
		background: #f2f8fd
	}

	.popupSearch_1_0_0__search button {
		position: absolute;
		top: 0;
		right: 0;
		height: 100%;
		background: #248de8;
		border: none;
		width: 38px;
		border-radius: 0 4px 4px 0;
		color: #fff;
		cursor: pointer;
		line-height: 0;
	}
	.popupSearch_1_0_0__search button img{
		width: 20px;
		height: 20px;
	}

</style>
<div class="modal popupSearch_1_0_0" id="search" style="display:none;">
	<div class="modal-bg"></div>
	<div class="modal-box animate-zoom">
		<div class="modal-header">
			<div class="modal-close">×</div>
			<div class="popupSearch_1_0_0__title">Tìm Kiếm Nhanh</div>
		</div>
		<div class="modal-body">
			<form action="/" id="searchform" name="searchform" method="get" onsubmit="return checkSearch()">	
				<div class="popupSearch_1_0_0__search">
					<input id="s" name="s" type="text" placeholder="Nhập từ khóa tìm kiếm">
					<input type="hidden" name="lang" value="vi"/>
					<button type="submit">	
						<img width="20" height="20" src="<?php echo $path?>images/search.png" alt="">
					</button>
				</div>
			</form>
		</div>
	</div>
</div>