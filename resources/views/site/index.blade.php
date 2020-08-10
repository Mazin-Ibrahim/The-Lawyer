@extends('layouts.site')

@section('content')

<div class="back">
	<div class="absolute md:mt-40 md:px-48 md:py-8 bg-gary-100 md:mx-64">
		<div class="bg-gray-100  rounded p-8 text-center shadow-lg">
			<div>
				<h1 class="text-center font-bold text-3xl text-yellow-600">
					منصة المحاميين الألكترونية
				</h1> 

			</div>
			<p class="mt-4 text-center font-base">
				منصة تهتم بكل مايخص عالم المحامين، وتقدم إستشارات للمستخدمين وتتيح لهم التواصل مع المحامين والإستفادة من خبراتهم.
			</p>
		</div>
	</div>
</div>

<div class="container md:mx-auto my-16">
	<div class="md:flex-row-reverse flex">
		<div class="w-2/4 p-8 border mx-2 hover:shadow-lg rounded-lg">
			<h1 class="text-center text-center font-bold text-2xl text-yellow-600 mb-4">من نحن ؟</h1>
			<p class="text-center font-semibold leading-10 text-gray-700">
				منصة المحامين الالكترونية هي منصة عصرية تفتح طرقاً حديثة للتواصل بين المحامين وأصحاب القضايا في السودان، حيث تمكن الأفراد من عرض طلباتهم من استشارات أو مرافعات أو غيرها من الخدمات القانونية. ليتمكن المحامين المرخصين من الاطلاع عليها وتقديم عروضهم المناسبة. وذلك بكل سهولة ويسر.
			</p>
		</div>
		<div class="w-2/4 p-8 text-right border mx-2 hover:shadow-lg rounded-lg">
			<h1 class="text-center font-bold text-2xl text-yellow-600 mb-4">لماذا منصة اللمحامين الالكترونية ؟</h1>
			<p class="font-semibold mt-4 text-gray-700">سرعة الأداء وسهولة الاستخدام: توفر منصة وتطبيق محاماة سهولة الوصول للخدمات المعروضة والمحامين المرخصين.</p>
			<p class="font-semibold mt-4 text-gray-700">توفير عناء البحث والسعي بين المحاكم ومكاتب المحاماة لطلب الحلول والاستشارات والخدمات القانونية.</p>
			<p class="font-semibold mt-4 text-gray-700">سهولة المقارنة والاختيار: تتيح منصة محاماة اختيار المحامي المناسب بناء على السعر وتقييم المحامي</p>
			<p class="font-semibold mt-4 text-gray-700">محامون أكفاء مرخصون من وزارة العدل و أصحاب خبرة وجودة.
			ا               لخصوصية والأمان</p>
		</div>
	</div>
</div>


<div class="container md:mx-auto mt-32">
	<div class="back-2 rounded-lg">
		<div class="">
			<div class="md:flex-row-reverse flex  justify-between px-64 mx-auto p-8">
				<div class="rounded-full h-48 w-48 flex flex-col items-center justify-center p-8 bg-white text-center transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110">
					<span>@include('icons.users')</span>
					<h1 class="font-bold text-2xl text-gray-700 mt-2 text-center">676 +</h1>
					<h1 class="font-bold text-lg text-gray-700 mt-2 text-center">مسجل</h1>
				</div>
				<div class="rounded-full h-48 w-48 flex flex flex-col  items-center justify-center p-8 bg-white text-center transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110">
					<span>@include('icons.done')</span>
					<h1 class="font-bold text-2xl text-gray-700 mt-2 text-center">676 +</h1>
					<h1 class="font-bold text-lg text-gray-700 mt-2 text-center">قضية تم علاجها</h1>
				</div>
				<div class="rounded-full h-48 w-48 flex flex flex-col  items-center justify-center p-8 bg-white text-center transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110">
					<span>@include('icons.work')</span>
					<h1 class="font-bold text-2xl text-gray-700 mt-2 text-center">543 +</h1>
					<h1 class="font-bold text-lg text-gray-700 mt-2 text-center">محامي</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="mx-auto container my-32">
	<h1 class="text-center font-bold text-yellow-600 text-3xl">
		المحامين النشطين
	</h1>
       <div class="mt-8 flex flex-row-reverse p-4 px-32">
		<div class=" border rounded-lg  md:w-1/4 mx-4">
			<img class="w-full h-48 object-cover" src='/../image/mazin.jpg'>
			<div class="px-2 py-1">
				<h1 class="font-bold text-sm  mb-2 text-center text-gray-700 mt-4">مازن أبراهيم</h1>
				<a href="" class="font-bold text-sm  mb-2 text-center text-gray-700 mt-4"></a>
				<h1 class="font-thin text-sm my-2 text-center">أستشاري</h1>
				<div class="flex flex-row-rever justify-between">
				   	<h1 class="font-thin text-xs">الخرطوم السوق العربي</h1>
				   	<h1 class="font-thin text-xs mx-2">عنوان المكتب</h1>

				</div>
				<div class="flex flex-row-rever justify-between my-2">
				   	<h1 class="font-thin text-xs">0100238843</h1>
				   	<h1 class="font-thin text-xs mx-2">رقم الهاتف</h1>

				</div>
                
				
			</div>
			<a href="" class="mx-16 font-semibold text-yellow-500 underline"> تواصل معي</a>
		</div>

		<div class=" border rounded-lg  md:w-1/4 mx-4 pb-4">
			<img class="w-full h-48 object-cover" src='/../image/mazin.jpg'>
			<div class="px-2 py-1">
				<h1 class="font-bold text-sm  mb-2 text-center text-gray-700 mt-4">مازن أبراهيم</h1>
				<a href="" class="font-bold text-sm  mb-2 text-center text-gray-700 mt-4"></a>
				<h1 class="font-thin text-sm my-2 text-center">أستشاري</h1>
				<div class="flex flex-row-rever justify-between">
				   	<h1 class="font-thin text-xs">الخرطوم السوق العربي</h1>
				   	<h1 class="font-thin text-xs mx-2">عنوان المكتب</h1>

				</div>
				<div class="flex flex-row-rever justify-between my-2">
				   	<h1 class="font-thin text-xs">0100238843</h1>
				   	<h1 class="font-thin text-xs mx-2">رقم الهاتف</h1>

				</div>
                
				
			</div>
			<a href="" class="mx-16 font-semibold text-yellow-500 underline"> تواصل معي</a>
		</div>

		<div class=" border rounded-lg  md:w-1/4 mx-4 pb-4">
			<img class="w-full h-48 object-cover" src='/../image/mazin.jpg'>
			<div class="px-2 py-1">
				<h1 class="font-bold text-sm  mb-2 text-center text-gray-700 mt-4">مازن أبراهيم</h1>
				<a href="" class="font-bold text-sm  mb-2 text-center text-gray-700 mt-4"></a>
				<h1 class="font-thin text-sm my-2 text-center">أستشاري</h1>
				<div class="flex flex-row-rever justify-between">
				   	<h1 class="font-thin text-xs">الخرطوم السوق العربي</h1>
				   	<h1 class="font-thin text-xs mx-2">عنوان المكتب</h1>

				</div>
				<div class="flex flex-row-rever justify-between my-2">
				   	<h1 class="font-thin text-xs">0100238843</h1>
				   	<h1 class="font-thin text-xs mx-2">رقم الهاتف</h1>

				</div>
                
				
			</div>
			<a href="" class="mx-16 font-semibold text-yellow-500 underline"> تواصل معي</a>
		</div>

		<div class=" border rounded-lg  md:w-1/4 mx-4 pb-4">
			<img class="w-full h-48 object-cover" src='/../image/mazin.jpg'>
			<div class="px-2 py-1">
				<h1 class="font-bold text-sm  mb-2 text-center text-gray-700 mt-4">مازن أبراهيم</h1>
				<a href="" class="font-bold text-sm  mb-2 text-center text-gray-700 mt-4"></a>
				<h1 class="font-thin text-sm my-2 text-center">أستشاري</h1>
				<div class="flex flex-row-rever justify-between">
				   	<h1 class="font-thin text-xs">الخرطوم السوق العربي</h1>
				   	<h1 class="font-thin text-xs mx-2">عنوان المكتب</h1>

				</div>
				<div class="flex flex-row-rever justify-between my-2">
				   	<h1 class="font-thin text-xs">0100238843</h1>
				   	<h1 class="font-thin text-xs mx-2">رقم الهاتف</h1>

				</div>
                
				
			</div>
			<a href="" class="mx-16 font-semibold text-yellow-500 underline"> تواصل معي</a>
		</div>

	</div>
</div>

<h1 class="my-8 font-bold text-center text-yellow-600 text-3xl">
	أخر  التدوينات
</h1>
<div class="mx-auto container bg-gray-100 p-2 my-8 rounded-lg">
	<div class="px-16">
		<div class="border-b">
			<h1 class="text-right font-bold text-lg text-yellow-600">ما بعد كورونا</h1>
			<h1 class="font-semibold my-2 text-right">بقلم :  مازن أبراهيم</h1>
			<p class="text-right my-4 font-base text-gray-900 leading-normal">هي قطعة إنشائية، ذات طول معتدل تُكتب نثراً، وتُهتمُّ بالمظاهر الخارجية للموضوع بطريقة سهلةٍ سريعة، ولا تعنى إلا بالناحية التي تمسُّ الكاتب عن قرب. رأى النور في عصر النهضة الأوروبية، واتخذ مفهومه من محاولات التي أطلق عليها اسم Essais، و"الفصل" (صيد الخاطر) كما عرفه العرب أقدم رائد للمقالة في الآداب العالمية، ذلك أن الفصل في الأدب العربي قد ظهر قبل ظهور مقالات مونتاني إمام هذا الفن غير مدافع بين الأوروبيين، فقد ظهر فن المقالة لأول مرة في فرنسا سنة 1571م، ثم ظهر بعد ذلك ببضع عشرة سنة في كتابات فرانسيس بيكون، ثم أصبحت المقالة منذ ذلك الحين فناً إنكليزياً شائعاً بين قراء الإنكليزية مع سبق الفرنسيين إليه  ..<a href="" class="font-semibold text-yellow-600">أقرأ المزيد</a></p> 
		</div>

		<div class="border-b mt-4">
			<h1 class="text-right font-bold text-lg text-yellow-600">ما بعد كورونا</h1>
			<h1 class="font-semibold my-2 text-right">بقلم :  مازن أبراهيم</h1>
			<p class="text-right my-4 font-base text-gray-900 leading-normal">هي قطعة إنشائية، ذات طول معتدل تُكتب نثراً، وتُهتمُّ بالمظاهر الخارجية للموضوع بطريقة سهلةٍ سريعة، ولا تعنى إلا بالناحية التي تمسُّ الكاتب عن قرب. رأى النور في عصر النهضة الأوروبية، واتخذ مفهومه من محاولات التي أطلق عليها اسم Essais، و"الفصل" (صيد الخاطر) كما عرفه العرب أقدم رائد للمقالة في الآداب العالمية، ذلك أن الفصل في الأدب العربي قد ظهر قبل ظهور مقالات مونتاني إمام هذا الفن غير مدافع بين الأوروبيين، فقد ظهر فن المقالة لأول مرة في فرنسا سنة 1571م، ثم ظهر بعد ذلك ببضع عشرة سنة في كتابات فرانسيس بيكون، ثم أصبحت المقالة منذ ذلك الحين فناً إنكليزياً شائعاً بين قراء الإنكليزية مع سبق الفرنسيين إليه  ..<a href="" class="font-semibold text-yellow-600">أقرأ المزيد</a></p> 
		</div>

		<div class="border-b mt-4">
			<h1 class="text-right font-bold text-lg text-yellow-600">ما بعد كورونا</h1>
			<h1 class="font-semibold my-2 text-right">بقلم :  مازن أبراهيم</h1>
			<p class="text-right my-4 font-base text-gray-900 leading-normal">هي قطعة إنشائية، ذات طول معتدل تُكتب نثراً، وتُهتمُّ بالمظاهر الخارجية للموضوع بطريقة سهلةٍ سريعة، ولا تعنى إلا بالناحية التي تمسُّ الكاتب عن قرب. رأى النور في عصر النهضة الأوروبية، واتخذ مفهومه من محاولات التي أطلق عليها اسم Essais، و"الفصل" (صيد الخاطر) كما عرفه العرب أقدم رائد للمقالة في الآداب العالمية، ذلك أن الفصل في الأدب العربي قد ظهر قبل ظهور مقالات مونتاني إمام هذا الفن غير مدافع بين الأوروبيين، فقد ظهر فن المقالة لأول مرة في فرنسا سنة 1571م، ثم ظهر بعد ذلك ببضع عشرة سنة في كتابات فرانسيس بيكون، ثم أصبحت المقالة منذ ذلك الحين فناً إنكليزياً شائعاً بين قراء الإنكليزية مع سبق الفرنسيين إليه  ..<a href="" class="font-semibold text-yellow-600">أقرأ المزيد</a></p> 
		</div>
	</div>
</div>

<h1 class="mt-32 mb-16 font-bold text-center text-yellow-600 text-3xl">
	تواصل معنا
</h1>

<div class="container mx-auto mb-8">
	<div class="flex md:flex-row-reverse p-2">
		<div class="md:w-1/2 mx-4">
			<form class="bg-white shadow-md rounded px-8 pt-6 pb-20 mb-4">
				<div class="mb-4">
					<label class="block text-right text-gray-700 text-sm font-bold mb-2" for="username">
						الأسم
					</label>
					<input class="shadow text-right appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none  focus:shadow-outline" id="username" type="text">
				</div>
				<div class="mb-6">
					<label class="text-right block text-gray-700 text-sm font-bold mb-2" for="password">
						البريد الالكتروني
					</label>
					<input class="shadow text-right appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="email">
				</div>

				<div class="mb-6">
					<label class="text-right block text-gray-700 text-sm font-bold mb-2" for="password">
						الرسالة
					</label>
					 <textarea  class="shadow text-right appearance-none border rounded w-full h-56 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
				</div>
				<div class="text-right">
					<button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
						أرسل
					</button>
					
				</div>
			</form>
		</div>
		<div class="md:w-1/2 mx-4">
            <img class="object-cover object-fit" src="{{ asset('image/img_contact.png') }}">
		</div>
	</div>
</div>

@endsection