						<div class="tab-pane fade" id="tab03" role="tabpanel" aria-labelledby="tab003">

							<div class="row">
								<div class="col-sm-12">
									<div class="img"><img src="/img/chart1.jpg" alt="" id="chart1_1_img"></div>
									<p>「ページ検索」ではサイトマップの①・②に関してヒアリングします。</p>
								</div>
							</div>

							<div id="page_default_area">
								<div class="row mygroup" id="">
									<div class="col-sm-12">
										<div class="form-group"><label for="" class="heading_text">URL</label>
											<div class="row">
												<div class="col-sm-12">
													<p id="top_title"><?php echo $form->form3->c0301; ?></p>
													<p id="top_url">
													<?php if(empty($form->form3->c0302)): ?>
														[事前情報 > 既存URL] をご入力ください
													<?php else: ?>
														<?php echo $form->form3->c0302; ?>
													<?php endif; ?>
													</p>
												</div>
											</div>
										</div>
										<div class="form-group"><label for="" class="heading_text">ブログ</label>
											<div class="row">
												<div class="col-sm-12">
													<div id="blog_list_area">
														<p>新規で構築いたします。</p>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group"><label for="" class="heading_text">アクセス</label>
											<div class="row">
												<div class="col-sm-12">
													<div id="access_list_area">
														<p>新規で構築いたします。</p>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group"><label for="" class="heading_text">フォーム</label>
											<div class="row">
												<div class="col-sm-12">
													<div id="form_list_area">
														<p>新規で構築いたします。</p>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group"><label for="" class="heading_text">サイトマップ</label>
											<div class="row">
												<div class="col-sm-12">
													<p id="sitemap_title">新規で構築いたします。</p>
													<p id="sitemap_url"></p>
												</div>
											</div>
										</div>
										<div class="form-group"><label for="" class="heading_text">プライバシーポリシー</label>
											<div class="row">
												<div class="col-sm-12">
													<p id="privacy_title">新規で構築いたします。</p>
													<p id="privacy_url"></p>
												</div>
											</div>
										</div>
										<div class="form-group"><label for="" class="heading_text">その他の動的ページ</label>
											<div class="row">
												<div class="col-sm-12">
													<div id="other_list_area">
														<p>新規で構築いたします。</p>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group"><label for="" class="heading_text">その他のページ一覧</label>
											<div class="row">
												<div class="col-sm-12">
													<div id="url_list_area">
														
													</div>
													<div id="url_list_msg">
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- page_default_area -->

							<div class="row btn button_area">
								<div class="col-sm-12 text-center">
									<a class="btn btn-secondary" data-toggle="05" href="javascript:void(0);">戻る</a>&nbsp;&nbsp;
									<a class="btn btn-primary" data-toggle="04" href="javascript:void(0);">ページ設定へ</a>
								</div>
							</div>
	
						</div><!-- tab03 -->

<script>
//
<?php if(!empty($form->form3->c0303)): ?>
var c0303_json = <?php echo $form->form3->c0303; ?>;
<?php else: ?>
var c0303_json = '';
<?php endif; ?>
<?php if(!empty($form->form3->c0304)): ?>
var c0304_json = <?php echo $form->form3->c0304; ?>;
<?php else: ?>
var c0304_json = '';
<?php endif; ?>
<?php if(!empty($form->form3->c0305)): ?>
var c0305_json = <?php echo $form->form3->c0305; ?>;
<?php else: ?>
var c0305_json = '';
<?php endif; ?>
<?php if(!empty($form->form3->c0310)): ?>
var c0310_json = <?php echo $form->form3->c0310; ?>;
<?php else: ?>
var c0310_json = '';
<?php endif; ?>
<?php if(!empty($form->form3->c0311)): ?>
var c0311_json = <?php echo $form->form3->c0311; ?>;
<?php else: ?>
var c0311_json = '';
<?php endif; ?>
<?php if(!empty($form->form4->c0413)): ?>
var c0413_json = <?php echo $form->form4->c0413; ?>;
<?php else: ?>
var c0413_json = '';
<?php endif; ?>
<?php if(!empty($form->form4->c0419)): ?>
var c0419_json = <?php echo $form->form4->c0419; ?>;
<?php else: ?>
var c0419_json = '';
<?php endif; ?>
//
function urlCheckChange(){
	$('input[id^=url_check_]').change(function(){
		urlCheckChangeDetail();
		checkExc($(this));
	});
	$('input[id^=blog_url_check_]').change(function(){
		urlCheckChangeDetail();
		checkExc($(this));
	});
	$('input[id^=access_url_check_]').change(function(){
		urlCheckChangeDetail();
		checkExc($(this));
	});
	$('input[id^=form_url_check_]').change(function(){
		urlCheckChangeDetail();
		checkExc($(this));
	});
	$('input[id^=other_url_check_]').change(function(){
		urlCheckChangeDetail();
		checkExc($(this));
	});
}
//
function checkExc(i){
	if(i.val() == 1){
		i.parents('tr').addClass('exc');
	}else{
		i.parents('tr').removeClass('exc');
	}
};
//
function urlCheckChangeDetail(){
	//
	/*blogUrlSet();
	accessUrlSet();
	formUrlSet();*/
	//
	var c0413_area_data = '';
	var c0419_area_data = '';
	var blog_count = 0;
	var access_count = 0;
	var form_count = 0;
	$('#url_result_area').html('');
	$('#url_result_area1').html('');
	$('#url_result_area2').html('');
	$('#url_result_area3').html('');
	$('#url_area1').html('');
	$('#url_area2').html('');
	$('#url_area3').html('');
	var url_area1_num = 0;
	var url_area2_num = 0;
	var url_area3_num = 0;
	//
	//$('#url_result_area').html('<a href="'+url+'" target="_blank">'+url+'</a><input type="hidden" id="c0407" name="Form[form4][c0407]" value="'+url+'">');
	//
	var url_result_html_h = '';
	url_result_html_h += '<table class="table table-responsive-sm table-striped">';
	url_result_html_h += '<thead>';
	url_result_html_h += '<tr>';
	url_result_html_h += '<th>ページタイトル / URL</th>';
	//url_result_html_h += '<th>URL</th>';
	url_result_html_h += '</tr>';
	url_result_html_h += '</thead>';
	url_result_html_h += '<tbody>';
	var url_result_html_h2 = '';
	url_result_html_h2 += '<table class="table table-responsive-sm table-striped" id="url_result_area_table2">';
	url_result_html_h2 += '<thead>';
	url_result_html_h2 += '<tr>';
	url_result_html_h2 += '<th>ページタイトル / URL</th>';
	//url_result_html_h += '<th>URL</th>';
	url_result_html_h2 += '</tr>';
	url_result_html_h2 += '</thead>';
	url_result_html_h2 += '<tbody>';
	var url_result_html1 = url_result_html_h;
	var url_result_html2 = url_result_html_h2;
	var url_result_html3 = url_result_html_h;
	//
	var mode = [
		'blog',
		'access',
		'form',
		'other',
		'default'
	];
	//
	for(let l = 0; l < mode.length; l++){
		if(mode[l] == 'blog'){
			var loop_url_list = blog_url_list;
		}else if(mode[l] == 'access'){
			var loop_url_list = access_url_list;
		}else if(mode[l] == 'form'){
			var loop_url_list = form_url_list;
		}else if(mode[l] == 'other'){
			var loop_url_list = other_url_list;
		}else{
			var loop_url_list = url_list;
		}
		for(let j = 0; j < loop_url_list.length; j++){
			var tmp_url_result_html = '';
			tmp_url_result_html += '<tr>';
			tmp_url_result_html += '<td style="word-break: break-all;">'+loop_url_list[j]['title']+'<br>';
			tmp_url_result_html += '<a href="'+loop_url_list[j]['url']+'" target="_blank">'+loop_url_list[j]['url']+'</a></td>';
			tmp_url_result_html += '</tr>';
			if(mode[l] == 'blog'){
				var k = $('input[id="blog_url_check_'+j+'"]:checked').val();
			}else if(mode[l] == 'access'){
				var k = $('input[id="access_url_check_'+j+'"]:checked').val();
			}else if(mode[l] == 'form'){
				var k = $('input[id="form_url_check_'+j+'"]:checked').val();
			}else if(mode[l] == 'other'){
				var k = $('input[id="other_url_check_'+j+'"]:checked').val();
			}else{
				var k = $('input[id="url_check_'+j+'"]:checked').val();
			}
			if(k == 2 && mode[l] == 'blog'){
				if(blog_count == 0){
					//console.log('#url_result_area1');
					tmp_url_result_html += '<input type="hidden" id="c0401_'+url_area1_num+'_1" name="Form[form4][c0401]['+url_area1_num+'][1]" value="'+loop_url_list[j]['title']+'">';
					tmp_url_result_html += '<input type="hidden" id="c0401_'+url_area1_num+'_2" name="Form[form4][c0401]['+url_area1_num+'][2]" value="'+loop_url_list[j]['url']+'">';
					url_result_html1 += tmp_url_result_html;
					url_area1_num++;
					blog_count++;
				}else{
					tmp_url_result_html += '<input type="hidden" id="c0402_'+url_area2_num+'_1" name="Form[form4][c0402]['+url_area2_num+'][1]" value="'+loop_url_list[j]['title']+'">';
					tmp_url_result_html += '<input type="hidden" id="c0402_'+url_area2_num+'_2" name="Form[form4][c0402]['+url_area2_num+'][2]" value="'+loop_url_list[j]['url']+'">';
					url_result_html2 += tmp_url_result_html;
					url_area2_num++;
				}
				//
				c0413_area_data += '<div class="row">';
				c0413_area_data += '<div class="col-sm-12">';
				c0413_area_data += '<div class="form-group">';
				c0413_area_data += '<label for="" class="heading_text">データ移管 : <a href="'+loop_url_list[j]['url']+'" target="_blank">'+loop_url_list[j]['url']+'</a></label>';
				c0413_area_data += '<div class="col-md-12 col-form-label" id="">';
				c0413_area_data += '<div class="input radio">';
				if(c0413_json[j] && c0413_json[j] != ''){
					if(c0413_json[j].match(/移管する/)){
						c0413_area_data += '<input type="hidden" name="Form[form4][c0413]['+j+']" value="">';
						c0413_area_data += '<input type="radio" name="Form[form4][c0413]['+j+']" value="'+loop_url_list[j]['url']+',移管する" id="c0413_1_'+j+'" checked>';
						c0413_area_data += '<label for="c0413_1_'+j+'" class="radio-inline">はい</label>';
						c0413_area_data += '<input type="radio" name="Form[form4][c0413]['+j+']" value="'+loop_url_list[j]['url']+',移管しない" id="c0413_2_'+j+'">';
						c0413_area_data += '<label for="c0413_2_'+j+'" class="radio-inline">いいえ</label>';
					}else{
						c0413_area_data += '<input type="hidden" name="Form[form4][c0413]['+j+']" value="">';
						c0413_area_data += '<input type="radio" name="Form[form4][c0413]['+j+']" value="'+loop_url_list[j]['url']+',移管する" id="c0413_1_'+j+'">';
						c0413_area_data += '<label for="c0413_1_'+j+'" class="radio-inline">はい</label>';
						c0413_area_data += '<input type="radio" name="Form[form4][c0413]['+j+']" value="'+loop_url_list[j]['url']+',移管しない" id="c0413_2_'+j+'" checked>';
						c0413_area_data += '<label for="c0413_2_'+j+'" class="radio-inline">いいえ</label>';
					}
				}else{
					c0413_area_data += '<input type="hidden" name="Form[form4][c0413]['+j+']" value="">';
					c0413_area_data += '<input type="radio" name="Form[form4][c0413]['+j+']" value="'+loop_url_list[j]['url']+',移管する" id="c0413_1_'+j+'">';
					c0413_area_data += '<label for="c0413_1_'+j+'" class="radio-inline">はい</label>';
					c0413_area_data += '<input type="radio" name="Form[form4][c0413]['+j+']" value="'+loop_url_list[j]['url']+',移管しない" id="c0413_2_'+j+'" checked>';
					c0413_area_data += '<label for="c0413_2_'+j+'" class="radio-inline">いいえ</label>';
				}
				c0413_area_data += '</div>';
				c0413_area_data += '</div>';
				c0413_area_data += '</div>';
				c0413_area_data += '</div>';
				c0413_area_data += '</div>';
			}else if(k == 2 && mode[l] == 'access'){
				if(access_count == 0){
					//console.log('#url_result_area1');
					tmp_url_result_html += '<input type="hidden" id="c0401_'+url_area1_num+'_1" name="Form[form4][c0401]['+url_area1_num+'][1]" value="'+loop_url_list[j]['title']+'">';
					tmp_url_result_html += '<input type="hidden" id="c0401_'+url_area1_num+'_2" name="Form[form4][c0401]['+url_area1_num+'][2]" value="'+loop_url_list[j]['url']+'">';
					url_result_html1 += tmp_url_result_html;
					url_area1_num++;
					access_count++;
				}else{
					tmp_url_result_html += '<input type="hidden" id="c0402_'+url_area2_num+'_1" name="Form[form4][c0402]['+url_area2_num+'][1]" value="'+loop_url_list[j]['title']+'">';
					tmp_url_result_html += '<input type="hidden" id="c0402_'+url_area2_num+'_2" name="Form[form4][c0402]['+url_area2_num+'][2]" value="'+loop_url_list[j]['url']+'">';
					url_result_html2 += tmp_url_result_html;
					url_area2_num++;
				}
			}else if(k == 2 && mode[l] == 'form'){
				if(form_count == 0){
					//console.log('#url_result_area1');
					tmp_url_result_html += '<input type="hidden" id="c0401_'+url_area1_num+'_1" name="Form[form4][c0401]['+url_area1_num+'][1]" value="'+loop_url_list[j]['title']+'">';
					tmp_url_result_html += '<input type="hidden" id="c0401_'+url_area1_num+'_2" name="Form[form4][c0401]['+url_area1_num+'][2]" value="'+loop_url_list[j]['url']+'">';
					url_result_html1 += tmp_url_result_html;
					url_area1_num++;
					form_count++;
				}else{
					tmp_url_result_html += '<input type="hidden" id="c0402_'+url_area2_num+'_1" name="Form[form4][c0402]['+url_area2_num+'][1]" value="'+loop_url_list[j]['title']+'">';
					tmp_url_result_html += '<input type="hidden" id="c0402_'+url_area2_num+'_2" name="Form[form4][c0402]['+url_area2_num+'][2]" value="'+loop_url_list[j]['url']+'">';
					url_result_html2 += tmp_url_result_html;
					url_area2_num++;
				}
			}else if(k == 2 && (mode[l] == 'default' || mode[l] == 'other')){
				tmp_url_result_html += '<input type="hidden" id="c0402_'+url_area2_num+'_1" name="Form[form4][c0402]['+url_area2_num+'][1]" value="'+loop_url_list[j]['title']+'">';
				tmp_url_result_html += '<input type="hidden" id="c0402_'+url_area2_num+'_2" name="Form[form4][c0402]['+url_area2_num+'][2]" value="'+loop_url_list[j]['url']+'">';
				url_result_html2 += tmp_url_result_html;
				url_area2_num++;
				if(mode[l] == 'other'){
					c0419_area_data += '<div class="row">';
					c0419_area_data += '<div class="col-sm-12">';
					c0419_area_data += '<div class="form-group">';
					c0419_area_data += '<label for="" class="heading_text">データ移管 : <a href="'+loop_url_list[j]['url']+'" target="_blank">'+loop_url_list[j]['url']+'</a></label>';
					c0419_area_data += '<div class="col-md-12 col-form-label" id="">';
					c0419_area_data += '<div class="input radio">';
					if(c0419_json[j] && c0419_json[j] != ''){
						if(c0419_json[j].match(/移管する/)){
							c0419_area_data += '<input type="hidden" name="Form[form4][c0419]['+j+']" value="">';
							c0419_area_data += '<input type="radio" name="Form[form4][c0419]['+j+']" value="'+loop_url_list[j]['url']+',移管する" id="c0419_1_'+j+'" checked>';
							c0419_area_data += '<label for="c0419_1_'+j+'" class="radio-inline">はい</label>';
							c0419_area_data += '<input type="radio" name="Form[form4][c0419]['+j+']" value="'+loop_url_list[j]['url']+',移管しない" id="c0419_2_'+j+'">';
							c0419_area_data += '<label for="c0419_2_'+j+'" class="radio-inline">いいえ</label>';
						}else{
							c0419_area_data += '<input type="hidden" name="Form[form4][c0419]['+j+']" value="">';
							c0419_area_data += '<input type="radio" name="Form[form4][c0419]['+j+']" value="'+loop_url_list[j]['url']+',移管する" id="c0419_1_'+j+'">';
							c0419_area_data += '<label for="c0419_1_'+j+'" class="radio-inline">はい</label>';
							c0419_area_data += '<input type="radio" name="Form[form4][c0419]['+j+']" value="'+loop_url_list[j]['url']+',移管しない" id="c0419_2_'+j+'" checked>';
							c0419_area_data += '<label for="c0419_2_'+j+'" class="radio-inline">いいえ</label>';
						}
					}else{
						c0419_area_data += '<input type="hidden" name="Form[form4][c0419]['+j+']" value="">';
						c0419_area_data += '<input type="radio" name="Form[form4][c0419]['+j+']" value="'+loop_url_list[j]['url']+',移管する" id="c0419_1_'+j+'">';
						c0419_area_data += '<label for="c0419_1_'+j+'" class="radio-inline">はい</label>';
						c0419_area_data += '<input type="radio" name="Form[form4][c0419]['+j+']" value="'+loop_url_list[j]['url']+',移管しない" id="c0419_2_'+j+'" checked>';
						c0419_area_data += '<label for="c0419_2_'+j+'" class="radio-inline">いいえ</label>';
					}
					c0419_area_data += '</div>';
					c0419_area_data += '</div>';
					c0419_area_data += '</div>';
					c0419_area_data += '</div>';
					c0419_area_data += '</div>';
				}
			}else if(k == 1){
				tmp_url_result_html += '<input type="hidden" id="c0403_'+url_area3_num+'_1" name="Form[form4][c0403]['+url_area3_num+'][1]" value="'+loop_url_list[j]['title']+'">';
				tmp_url_result_html += '<input type="hidden" id="c0403_'+url_area3_num+'_2" name="Form[form4][c0403]['+url_area3_num+'][2]" value="'+loop_url_list[j]['url']+'">';
				url_result_html3 += tmp_url_result_html;
				url_area3_num++;
			}
		}
	}
	var url_result_html_f = '';
	url_result_html_f += '</tbody>';
	url_result_html_f += '</table>';
	url_result_html1 += url_result_html_f;
	url_result_html2 += url_result_html_f;
	url_result_html3 += url_result_html_f;
	//
	$('#url_result_area1').html(url_result_html1);
	$('#url_result_area2').html(url_result_html2);
	$('#url_result_area3').html(url_result_html3);
	$('#url_area1').html(' : '+url_area1_num+'ページ');
	$('#url_area2').html(' : '+url_area2_num+'ページ');
	$('#url_area3').html(' : '+url_area3_num+'ページ');
	//$('#c0413_area').html(c0413_area_data);
	//$('#c0419_area').html(c0419_area_data);
	$('#c0413_area').html(c0413_area_data+c0419_area_data);
}
//
$(function(){
	if(c0303_json != ''){
		var blog_list_html = '';
		blog_list_html += '<table class="dtable">';
		blog_list_html += '<thead>';
		blog_list_html += '<tr>';
		blog_list_html += '<td>ページタイトル</td>';
		blog_list_html += '<td>URL</td>';
		blog_list_html += '<td>必要</td>';
		blog_list_html += '<td>除外</td>';
		blog_list_html += '</tr>';
		blog_list_html += '</thead>';
		blog_list_html += '<tbody>';
		for(var i=0;i<c0303_json.length;i++){
			if(c0303_json[i][3] == 2){
				blog_list_html += '<tr>';
			}else{
				blog_list_html += '<tr class="exc">';
			}
			blog_list_html += '<td>'+c0303_json[i][1]+'</td>';
			blog_list_html += '<td>'+c0303_json[i][2]+'</td>';
			blog_list_html += '<input type="hidden" name="Form[form3][c0303]['+i+'][1]" value="'+c0303_json[i][1]+'">';
			blog_list_html += '<input type="hidden" name="Form[form3][c0303]['+i+'][2]" value="'+c0303_json[i][2]+'">';
			if(c0303_json[i][3] == 2){
				blog_list_html += '<td class="align_c"><input type="radio" id="blog_url_check_'+i+'" name="Form[form3][c0303]['+i+'][3]" value="2" checked></td>';
				blog_list_html += '<td class="align_c"><input type="radio" id="blog_url_check_'+i+'" name="Form[form3][c0303]['+i+'][3]" value="1"></td>';
			}else{
				blog_list_html += '<td class="align_c"><input type="radio" id="blog_url_check_'+i+'" name="Form[form3][c0303]['+i+'][3]" value="2"></td>';
				blog_list_html += '<td class="align_c"><input type="radio" id="blog_url_check_'+i+'" name="Form[form3][c0303]['+i+'][3]" value="1" checked></td>';
			}
			blog_list_html += '</tr>';
		}
		blog_list_html += '</tbody>';
		blog_list_html += '</table>';
		$('#blog_list_area').html(blog_list_html);
	}
	if(c0304_json != ''){
		var access_list_html = '';
		access_list_html += '<table class="dtable">';
		access_list_html += '<thead>';
		access_list_html += '<tr>';
		access_list_html += '<td>ページタイトル</td>';
		access_list_html += '<td>URL</td>';
		access_list_html += '<td>必要</td>';
		access_list_html += '<td>除外</td>';
		access_list_html += '</tr>';
		access_list_html += '</thead>';
		access_list_html += '<tbody>';
		for(var i=0;i<c0304_json.length;i++){
			if(c0304_json[i][3] == 2){
				access_list_html += '<tr>';
			}else{
				access_list_html += '<tr class="exc">';
			}
			access_list_html += '<td>'+c0304_json[i][1]+'</td>';
			access_list_html += '<td>'+c0304_json[i][2]+'</td>';
			access_list_html += '<input type="hidden" name="Form[form3][c0304]['+i+'][1]" value="'+c0304_json[i][1]+'">';
			access_list_html += '<input type="hidden" name="Form[form3][c0304]['+i+'][2]" value="'+c0304_json[i][2]+'">';
			if(c0304_json[i][3] == 2){
				access_list_html += '<td class="align_c"><input type="radio" id="access_url_check_'+i+'" name="Form[form3][c0304]['+i+'][3]" value="2" checked></td>';
				access_list_html += '<td class="align_c"><input type="radio" id="access_url_check_'+i+'" name="Form[form3][c0304]['+i+'][3]" value="1"></td>';
			}else{
				access_list_html += '<td class="align_c"><input type="radio" id="access_url_check_'+i+'" name="Form[form3][c0304]['+i+'][3]" value="2"></td>';
				access_list_html += '<td class="align_c"><input type="radio" id="access_url_check_'+i+'" name="Form[form3][c0304]['+i+'][3]" value="1" checked></td>';
			}
			access_list_html += '</tr>';
		}
		access_list_html += '</tbody>';
		access_list_html += '</table>';
		$('#access_list_area').html(access_list_html);
	}
	if(c0305_json != ''){
		var form_list_html = '';
		form_list_html += '<table class="dtable">';
		form_list_html += '<thead>';
		form_list_html += '<tr>';
		form_list_html += '<td>ページタイトル</td>';
		form_list_html += '<td>URL</td>';
		form_list_html += '<td>必要</td>';
		form_list_html += '<td>除外</td>';
		form_list_html += '</tr>';
		form_list_html += '</thead>';
		form_list_html += '<tbody>';
		for(var i=0;i<c0305_json.length;i++){
			if(c0305_json[i][3] == 2){
				form_list_html += '<tr>';
			}else{
				form_list_html += '<tr class="exc">';
			}
			form_list_html += '<td>'+c0305_json[i][1]+'</td>';
			form_list_html += '<td>'+c0305_json[i][2]+'</td>';
			form_list_html += '<input type="hidden" name="Form[form3][c0305]['+i+'][1]" value="'+c0305_json[i][1]+'">';
			form_list_html += '<input type="hidden" name="Form[form3][c0305]['+i+'][2]" value="'+c0305_json[i][2]+'">';
			if(c0305_json[i][3] == 2){
				form_list_html += '<td class="align_c"><input type="radio" id="form_url_check_'+i+'" name="Form[form3][c0305]['+i+'][3]" value="2" checked></td>';
				form_list_html += '<td class="align_c"><input type="radio" id="form_url_check_'+i+'" name="Form[form3][c0305]['+i+'][3]" value="1"></td>';
			}else{
				form_list_html += '<td class="align_c"><input type="radio" id="form_url_check_'+i+'" name="Form[form3][c0305]['+i+'][3]" value="2"></td>';
				form_list_html += '<td class="align_c"><input type="radio" id="form_url_check_'+i+'" name="Form[form3][c0305]['+i+'][3]" value="1" checked></td>';
			}
			form_list_html += '</tr>';
		}
		form_list_html += '</tbody>';
		form_list_html += '</table>';
		$('#form_list_area').html(form_list_html);
	}
	if(c0310_json != ''){
		var other_list_html = '';
		other_list_html += '<table class="dtable">';
		other_list_html += '<thead>';
		other_list_html += '<tr>';
		other_list_html += '<td>ページタイトル</td>';
		other_list_html += '<td>URL</td>';
		other_list_html += '<td>必要</td>';
		other_list_html += '<td>除外</td>';
		other_list_html += '</tr>';
		other_list_html += '</thead>';
		other_list_html += '<tbody>';
		for(var i=0;i<c0310_json.length;i++){
			if(c0310_json[i][3] == 2){
				other_list_html += '<tr>';
			}else{
				other_list_html += '<tr class="exc">';
			}
			other_list_html += '<td>'+c0310_json[i][1]+'</td>';
			other_list_html += '<td>'+c0310_json[i][2]+'</td>';
			other_list_html += '<input type="hidden" name="Form[form3][c0310]['+i+'][1]" value="'+c0310_json[i][1]+'">';
			other_list_html += '<input type="hidden" name="Form[form3][c0310]['+i+'][2]" value="'+c0310_json[i][2]+'">';
			if(c0310_json[i][3] == 2){
				other_list_html += '<td class="align_c"><input type="radio" id="other_url_check_'+i+'" name="Form[form3][c0310]['+i+'][3]" value="2" checked></td>';
				other_list_html += '<td class="align_c"><input type="radio" id="other_url_check_'+i+'" name="Form[form3][c0310]['+i+'][3]" value="1"></td>';
			}else{
				other_list_html += '<td class="align_c"><input type="radio" id="other_url_check_'+i+'" name="Form[form3][c0310]['+i+'][3]" value="2"></td>';
				other_list_html += '<td class="align_c"><input type="radio" id="other_url_check_'+i+'" name="Form[form3][c0310]['+i+'][3]" value="1" checked></td>';
			}
			other_list_html += '</tr>';
		}
		other_list_html += '</tbody>';
		other_list_html += '</table>';
		$('#other_list_area').html(other_list_html);
	}
	if(c0311_json != ''){
		var url_list_html = '';
		var url_msg_show = false;
		url_list_html += '<table class="dtable">';
		url_list_html += '<thead>';
		url_list_html += '<tr>';
		url_list_html += '<td>ページタイトル</td>';
		url_list_html += '<td>URL</td>';
		url_list_html += '<td>必要</td>';
		url_list_html += '<td>除外</td>';
		url_list_html += '</tr>';
		url_list_html += '</thead>';
		url_list_html += '<tbody>';
		for(var i=0;i<c0311_json.length;i++){
			if(c0311_json[i][3] == 2){
				url_list_html += '<tr>';
			}else{
				url_list_html += '<tr class="exc">';
			}
			url_list_html += '<td>'+c0311_json[i][1]+'</td>';
			url_list_html += '<td>'+c0311_json[i][2]+'</td>';
			url_list_html += '<input type="hidden" name="Form[form3][c0311]['+i+'][1]" value="'+c0311_json[i][1]+'">';
			url_list_html += '<input type="hidden" name="Form[form3][c0311]['+i+'][2]" value="'+c0311_json[i][2]+'">';
			if(c0311_json[i][3] == 2){
				url_list_html += '<td class="align_c"><input type="radio" id="url_check_'+i+'" name="Form[form3][c0311]['+i+'][3]" value="2" checked></td>';
				url_list_html += '<td class="align_c"><input type="radio" id="url_check_'+i+'" name="Form[form3][c0311]['+i+'][3]" value="1"></td>';				
			}else{
				url_list_html += '<td class="align_c"><input type="radio" id="url_check_'+i+'" name="Form[form3][c0311]['+i+'][3]" value="2"></td>';
				url_list_html += '<td class="align_c"><input type="radio" id="url_check_'+i+'" name="Form[form3][c0311]['+i+'][3]" value="1" checked></td>';
			}
			var urlDate =  c0311_json[i][2].match(/[a-zA-Z0-9][a-zA-Z0-9-]{1,61}[a-zA-Z0-9](\.[a-zA-Z]{2,}|\.[a-zA-Z]{2,}\.[a-zA-Z]{2,})\/\d{2,8}/);
			if(urlDate){
				url_msg_show = true;
			}
			url_list_html += '</tr>';
		}
		if(url_msg_show){
			$('#url_list_msg').html('<div style="display:block;color:#E55353;">※ドメイン直下の記事ページを対象外といたしました。</div>');
		}else{
			$('#url_list_msg').html('<div style="display:none;color:#E55353;">※ドメイン直下の記事ページを対象外といたしました。</div>');
		}
		url_list_html += '</tbody>';
		url_list_html += '</table>';
		$('#url_list_area').html(url_list_html);
	}
	urlCheckChange();
	urlCheckChangeDetail();
});
</script>
