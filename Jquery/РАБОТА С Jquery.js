
			------------Работа с Jquery
-------	Спрятать элемент при загрузке страници Jquery
$(document).ready(function(){
	$("#div_id").hide(); и при загрузке этой страници элемент исчезнит
	$("#div_id2").click(function(){    //по нажатию на этот блок сделаем элемент видимым
		$("#div_id").show();		   //покажим элемент
		//или так $("#div_id").slideToggle(); //покажет элемент и потом спрячет
	});
});



---------

----ФУНКЦИЯ text
//text дописываем в определенный блок текст новый или вместо старого
$(document).ready(function(){
	$(#myDIV).text("Hello");
});

----ФУНКЦИЯ attr с ее помощью можно изменить любой атрибут элемента например
$(document).ready(function(){
        //картинки с данными именами находяться в папке с фйлом ПХП
       var images=["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg"]; //создаем массив с количесвом картинок на которое у нас будет слайд шоу
       var currentImage = 0; //поскольку в массиве первый элемент это 0 мы создали переменную с 0
        $("#img").attr("src",images[currentImage]);
})



--------ВЫВОДИМ Текст из INPUT в определенном блоке или надписи

<input type="text" id="text">
<button id="button">push</button>

JS

$(document).ready(function(){
        $('#button').click(function(){
            var text = $('#text').val();
                alert(text);
        });
});




---------ПОСМОТРЕТЬ РАЗМЕР ИЛИ CSS стиль блока с id="block например
<button id="button"> Push</button>

$(#button).click(function(){
	var val = $('#block').css('height');
	alert(val);	.    //выведет значение  css этого блока height
});




-----------------ФУНКЦИЯ children() ПОЗВОЛЯЕТ ОБРАДИТЬСЯ К любому дочернему элементу блока
<div id="block">
    <p>привет</p>
    <p>еще раз привет</p>
</div>
<button id="button">push</button>	

JS

$(document).ready(function(){
        $('#button').click(function(){
              var val =  $('#block').children('p').text()      //children функция обращаеться ко всем дочерним элементам указаного блока
                alert(val);       //выведет все 'p' элементы блока #block
        });
});
		
-----------
----------------ФУНКЦИЯ parent() находит всех предков у выбранных элементов
Например у меня есть 3 БЛОКА с разным контентом и разными кнопками и мы хотим
по нажатию на кнопку определенного блока менять стиль этого блока 
очень поможет функция parent()
		Есть еще parents() вернет будет присваивать значения или действия
		всем родителями если блок имеет более 1 радителя

<div class="block">
	<span></span>
    <p>привет</p>
    <p>еще раз привет</p>
    <button class="button">push</button>
</div>
<div class="block">
	<span></span>
    <p>привет</p>
    <p>еще раз привет</p>
    <button class="button">push</button>
</div>
<div class="block">
	<span></span>
    <p>привет</p>
    <p>еще раз привет</p>
    <button class="button">push</button>
</div>

JS
По нажатию на кнопку определеного блока все слова будут менять цвет

$(document).ready(function(){
        $('.button').click(function(){
                $(this).parent().css("color","#0000ff");
        });
});

ИЛИ еще при нажатии на кнопку менять весь текст написаный в блоке +
добавить надпись в блок <span>  именно в блоке в котором находиться КНОПКА без указания id элемента

$(document).ready(function(){
        $('.button').click(function(){
                $(this).parent().css("color","#0000ff");  //обратилесь к родителю
                $(this).parent().children('span').text("test") //обратились к ДОЧЕРНЕМУ ЭЛЕМЕНТУ РОДИТЕЛЯ и в нем выведем текст 
        });
});




--------------------
--------------------ANIMATE
.block{
    height: 200px;
    width: 200px;
    margin: 0 auto;
    background-color: black;
	font-size: 20px;
}

<div class="block">
</div>

<button class="button">push</button>

JS
//По нажатию на кнопку добавляем блоку ширину высоту и прозрачность
$(document).ready(function(){
        $('.button').click(function(){
               $('.block').animate({width:"1000px",height:"500px",opacity:"0.5"},1000);
        });
});

//по нажатию на кнопку применим в animate функцию toggle она будет уменьшать к нулю значение которое мы укажим
$(document).ready(function(){
        $('.button').click(function(){
               $('.block').animate({width:"toggle"},1000);  //ширина у нас 200px вот будет исчезать элемент в течении 1 секунды или указать height по ширини исчезала бы
			// $('.block').animate({opacity:"toggle"},1000); //так будет исчезать на месте теряя прозрачность
			//$('.block').animate({width:"hide"});    //исчезновение блока
	   });
});







		

-----------accordian    -по нажатию на элемент с низу появляеться содержание другого привер

<div id="menu">
    <h3>Section 1</h3>
    <div>
        <p>I'm the first section!</p>
    </div>
    <h3>Section 2</h3>
    <div>
        <p>I'm the second section!</p>
    </div>
    <h3>Section 3</h3>
    <div>
        <p>I'm the third section!</p>
    </div>
    <!--Add two more sections below!-->
</div>


JS

$(document).ready(function(){
        $('#menu').accordion();
});

--------------




-----------------------СЛАЙДЕР НА Jquery (По нажатию на кнопку снизу выезжает блок и по нажатию на нее же он прячется)
--- CSS

.block{
    position: relative;
    width:500px;
    margin: auto;
    margin-bottom: 20px;
    }

---HTML

<body>
    <div class="block">
        <p class="text">Здесь есть текст</p>
        <a class="click" href="#">Расширить</a>
        <p class="extend">Да конечно слайдер это очень и очень хорошо
            Да конечно слайдер это очень и очень хорошо Да конечно слайдер это очень и очень хорошо
            Да конечно слайдер это очень и очень хорошо</p>
    </div>
    <div class="block">
        <p class="text">Здесь есть текст</p>
        <a class="click" href="#">Расширить</a>
        <p class="extend">Да конечно слайдер это очень и очень хорошо
            Да конечно слайдер это очень и очень хорошо Да конечно слайдер это очень и очень хорошо
            Да конечно слайдер это очень и очень хорошо</p>
    </div>
    <div class="block">
        <p class="text">Здесь есть текст</p>
        <a class="click" href="#">Расширить</a>
        <p class="extend">Да конечно слайдер это очень и очень хорошо
            Да конечно слайдер это очень и очень хорошо Да конечно слайдер это очень и очень хорошо
            Да конечно слайдер это очень и очень хорошо</p>
    </div>
</body>

----Jquery
$(document).ready(function () {
   $(".extend").hide();
    // потому как блок у нас не 1 на который распространяеться СЛАЙД мы передаем в функцию (e)
    $(".click").click(function(e){  //(e) в этот аргумент передаеться объект на который мы нажали
       //(this) обращаемся к объекту на который мы нажали!
        //функция parent() (это блок с классом .block) помогла перейти к родителю объекта (this который мы передали в функции)
        //children помогает обратиться к дочернему блоку .extend класса .block
        $(this).parent().children(".extend").slideToggle("fast");  //slideToggle(1000) - разворачиваеться 1 чекунду
    });
});






