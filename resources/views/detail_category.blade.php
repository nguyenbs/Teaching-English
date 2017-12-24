@extends('header')
@section('content')
	<title>Choose detail category</title>
	<meta charset="utf-8">
	
	<style type="text/css">
		a:hover{
			text-decoration: none;
		}
		th{
			background: #1caff6;
    		color: #fff;
		}
		th,td{
			text-align: left;
		}
	</style>
	 <div class="col-md-12" style="padding: 0px;">
		<div class="container" style="">
			<div class="col-md-12" style="padding: 15px ;text-align: center;">
			<!--begin-->
				<div class="" style=" border-radius: 10px;box-shadow: 0 1px 15px rgba(0,0,0,.2);display: block;width: 400px;font-size: 17px;margin: 0 auto 40px;padding: 30px;text-align: center;">
					<h1 class="" style="color: #34b1ee;">Chọn một hướng đi!</h1>
					<p class="_2e1Vv">
						<span style="color: #ff8300;">Chúng ta học bắt đầu tại Cơ bản 1.</span><br>
						<span>Nếu bạn muốn nâng cao có thể làm bài kiểm tra rút ngắn.</span>
					</p>
					<ul class="list-inline">
						<li class="">
							<a  class="" href="choise_skill.html">
								<img src="resources/assets/images/hoc.png" alt="Bat dau hoc" style="height: 100px;width: 100px;"><br/>
								<span class="" style="color: #1caff6;">Cơ bản 1</span>
							</a>
						</li>
						<li class=" " style="color: #cecece;font-weight: 700;line-height: 80px;text-transform: uppercase;">hoặc</li>
						<li class="">
							<a  class="" href="">
								<img src="resources/assets/images/icon3.png " alt="Test nhanh" style="height: 100px;width: 100px;"><br/>
								<span class="" style="color: #7eb530;">Bài thi rút ngắn</span>
							</a>
						</li>
					</ul>
				</div>
			<!--end-->
			</div>
			<hr style="border:  2px solid #e9e9e9;height: 3;margin: 40px 0;">
			<div class="col-md-12">
				<h2 style="color: #3c3c3c;font-size: 20px;font-weight: 500;line-height: 26px;margin: 0 0 25px;">Ngữ pháp và ghi chú</h2>
				<div class="">
					<p style="color: #999;">Một số danh từ chỉ động vật, và nghĩa chủa chúng: </p>
					<table class="table table-bordered" style="border: 1px solid #ddd;">
						<thead>
							<tr>
								<th>Đại từ</th>
								<th>Cách dịch</th>
								<th>Phiên âm</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td  >I</td>
								<td  >Tôi</td>
								<td> /sku:l/</td>
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection