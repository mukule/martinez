       @extends('layouts.app')
       @section('content')
    <h1>{{$title}}</h1>
    <head>
       <div class="home-banner">
         <div class="container">
             <div class="row">
             <div class="col-sm-7">
             <div class="row">
                <div class="card text-white">
                    <img class="card-img" ref="image" src="/storage/svg/animate.gif">
                    <div class="card-img-overlay">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                  </div>
              
                       </div>
             </div>
             <div class="col-sm-5 p-3 bg-white">
<section id="text-69" class="widget home-banner-text p-4 widget_text">			<div class="textwidget"><style>
.form-group {
 margin-bottom: 0.4rem;
}

.btn-group .active {
 background-color: #3d5f75;
 color: white;
}
input[type="radio"]:checked + label {
background: #000;
}
body {
font-family: calibri;
}
input[type=radio], input[type=checkbox] {
     display:none;
 }

input[type=radio] + label, input[type=checkbox] + label {
     display:inline-block;

     padding: 7px 0px;
     margin-bottom: 0;
     font-size: 14px;
     line-height: 20px;
     color: #333;
     text-align: center;
     text-shadow: 0 1px 1px rgba(255,255,255,0.75);
     vertical-align: middle;
     cursor: pointer;
     background-color: #f5f5f5;
     background-image: -moz-linear-gradient(top,#fff,#e6e6e6);
     background-image: -webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));
     background-image: -webkit-linear-gradient(top,#fff,#e6e6e6);
     background-image: -o-linear-gradient(top,#fff,#e6e6e6);
     background-image: linear-gradient(to bottom,#fff,#e6e6e6);
     background-repeat: repeat-x;
     border: 1px solid #ccc;
     border-color: #e6e6e6 #e6e6e6 #bfbfbf;
     border-color: rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);
     border-bottom-color: #b3b3b3;
     filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff',endColorstr='#ffe6e6e6',GradientType=0);
     filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
     -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
     -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
     box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
 }

  input[type=radio]:checked + label, input[type=checkbox]:checked + label{
        background-image: none;
     outline: 0;
     -webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
     -moz-box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
     box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
             background-color: #3d5f75;
             color: #fff;
 }
</style>


     <div style="font-size: 18px;  font-weight: 600">QUICK QUOTE </div>
     <hr style="margin-top: 5px; margin-bottom: 5px">



 <div class="form-group  row">
     <label class="col-sm-4 op-text-right"> Academic Level </label>
     <div class="col-sm-8">
         <select name="ops_aclevel" class="form-control custom-select border-default col-sm-7" id="ops_aclevel">
                             <option value="1" name="ops_aclevel">
                 High School </option>
                             <option value="1.13" name="ops_aclevel">
                 Undergraduate </option>
                             <option value="1.3" name="ops_aclevel">
                 Masters </option>
                             <option value="1.5" name="ops_aclevel">
                 PhD </option>
                         </select>
     </div>
 </div>

 <div class="form-group  row">
     <label for="exampleSelect1" class="col-sm-4  op-text-right">Type of Paper</label>
     <div class="col-sm-8">
         <select name="order_tpaper" class="form-control custom-select border-default col-sm-7" id="exampleSelect1">

                             <option value="1"> Essay (Any Type) </option>
                             <option value="1"> Article (Any Type) </option>
                             <option value="1.1"> Assignment </option>
                             <option value="1"> Content (Any Type) </option>
                             <option value="1"> Admission Essay </option>
                             <option value="1"> Annotated Bibliography </option>
                             <option value="1"> Argumentative Essay </option>
                             <option value="1"> Article Review </option>
                             <option value="1"> Book/Movie Review </option>
                             <option value="1.1"> Business Plan </option>
                             <option value="1"> Capstone Project </option>
                             <option value="1"> Case Study </option>
                             <option value="1.1"> Coursework </option>
                             <option value="1"> Creative Writing </option>
                             <option value="1"> Critical Thinking </option>
                             <option value="1.3"> Dissertation </option>
                             <option value="1.3"> Dissertation chapter </option>
                             <option value="1.3"> Lab Report </option>
                             <option value="1.3"> Math Problem </option>
                             <option value="1.1"> Research Paper </option>
                             <option value="1.1"> Research Proposal </option>
                             <option value="1"> Research Summary </option>
                             <option value="1"> Scholarship Essay </option>
                             <option value="1"> Speech </option>
                             <option value="1.3"> Statistic Project </option>
                             <option value="1.1"> Term Paper </option>
                             <option value="1.3"> Thesis </option>
                             <option value="1"> Other </option>
                             <option value="1"> Presentation or Speech </option>
                             <option value="1"> Q&A </option>
                             <option value="1"> speech work </option>
                         </select>
     </div>
 </div>


<div class="container">
 <div class=" form-group  row">
     <label class="col-sm-4 op-text-right">Number of Pages</label>
     <div class="col-sm-8">

         <span class="input-group-btn">
             <button type="button" style="background: transparent; border-color: hsla(0,0%,59.2%,.5);"
                 class="btn btn-default border-default btn-number" data-type="minus"
                 data-field="order_pages">
                 -
             </button>
         </span>
         <span class="input-group-btn col-sm-8 row">
             <input type="text" id="order_pages" name="order_pages" id="order_pages"
                 class="form-control input-number border-default text-center" value="1" min="1" max="100" />
         </span>
         <span class="input-group-btn">
             <button type="button" style="background: transparent; border-color: hsla(0,0%,59.2%,.5);"
                 class="btn btn-default border-default btn-number" data-type="plus" data-field="order_pages">
                 +
             </button>
         </span>


     </div>


 </div>
 <div class="form-group row">
     <label class="col-sm-4 op-text-right"> </label>
     <div class="col-sm-8">
         <input id="words" type="hidden" value="275" />
         <div class="float-left wordcount"> Approximately 250 words </div>
     </div>
 </div>
 <div class="form-group row">
     <label class="col-sm-4 op-text-right"> Urgency </label>
     <div class="col-sm-8">
         <select name="order_deadline" class="form-control custom-select border-default col-sm-7"
             id="exampleSelect1">
                             <option name="order_deadline"
                 value="10.43#Days#8">
                 8 Days </option>
                             <option name="order_deadline"
                 value="11.41#Days#6">
                 6 Days </option>
                             <option name="order_deadline"
                 value="12.23#Days#4">
                 4 Days </option>
                             <option name="order_deadline"
                 value="13.45#Days#3">
                 3 Days </option>
                             <option name="order_deadline"
                 value="15#Hours#48">
                 48 Hours </option>
                             <option name="order_deadline"
                 value="19.14#Hours#24">
                 24 Hours </option>
                             <option name="order_deadline"
                 value="22.23#Hours#6">
                 6 Hours </option>
                             <option name="order_deadline"
                 value="25.04#Hours#3">
                 3 Hours </option>
                         </select>
     </div>
 </div>

 <input id="order_amount" class="form-control fontbig form-control-plaintext" type="hidden" name="order_amount"
     value="$" id="example-text-input">

 <div class="row">
     <div class="col-sm-12 ">
         <div class="orderamountc"><h4> Total price (USD) $: 10.99 </h4></div>
     </div>
     <div class="col-sm-12 calc2btn"> <a class="btn btn-primary shadow-sm" style="margin-top: 0px;" href="/orders"> ORDER NOW </a></div>
 </div>


 <script type="text/javascript">
 $(document).on("change", function() {

     var pages = $('[name="order_pages"]').val();
     var ac = $('[name="order_deadline"]:checked').val();
     var cap = $('[name="ops_aclevel"]:checked').val();


    var deadline = ac.split('#');
     var duration = deadline[1];
     var dvalue = deadline[2];      




     var num = (parseFloat(cap) * parseFloat(ac) * parseFloat(pages));
     var n = num.toFixed(2);

     document.getElementById('order_amount').value = parseFloat(n);
     document.getElementById('words').value = parseFloat(pages) * 275;



     $(".wordcount").html("Approximately " + parseFloat(pages) * 250 + " words");
     $(".orderamountc").html("<h4>Total price USD " + n + "</h4>");
     //alert(duration + " "+dvalue);
     var theTime = new Date();


     if (duration == 'Hours') {
         var chosentime = dvalue * 60 * 60 * 1000;
         // alert(chosentime);
     } else {
         var timeHours = dvalue * 24;
         var chosentime = dvalue * 24 * 60 * 60 * 1000;
         // alert(chosentime);

     }



     var newTime = new Date(Date.parse(theTime) + chosentime);
     var rr = "Ready by " + newTime.toGMTString();

     $(".newdeadline").html("Ready by, " + newTime);

 });




 function myFunction() {
     var y = document.getElementById("a4").value;
     var z = document.getElementById("a3").value;
     var x = y + z;
     document.getElementById('a5').value = parseFloat(NameValue);
 }
 </script>


 <script type="text/javascript">
 //plugin bootstrap minus and plus
 //http://jsfiddle.net/laelitenetwork/puJ6G/
 $('.btn-number').click(function(e) {
     e.preventDefault();

     fieldName = $(this).attr('data-field');
     type = $(this).attr('data-type');
     var input = $("input[name='" + fieldName + "']");
     var currentVal = parseInt(input.val());
     if (!isNaN(currentVal)) {
         if (type == 'minus') {

             if (currentVal > input.attr('min')) {
                 input.val(currentVal - 1).change();
             }
             if (parseInt(input.val()) == input.attr('min')) {
                 $(this).attr('disabled', true);
             }

         } else if (type == 'plus') {

             if (currentVal < input.attr('max')) {
                 input.val(currentVal + 1).change();
             }
             if (parseInt(input.val()) == input.attr('max')) {
                 $(this).attr('disabled', true);
             }

         }
     } else {
         input.val(0);
     }
 });
 $('.input-number').focusin(function() {
     $(this).data('oldValue', $(this).val());
 });
 $('.input-number').change(function() {

     minValue = parseInt($(this).attr('min'));
     maxValue = parseInt($(this).attr('max'));
     valueCurrent = parseInt($(this).val());

     name = $(this).attr('name');
     if (valueCurrent >= minValue) {
         $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
     } else {
         alert('Sorry, the minimum value was reached');
         $(this).val($(this).data('oldValue'));
     }
     if (valueCurrent <= maxValue) {
         $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
     } else {
         alert('Sorry, the maximum value was reached');
         $(this).val($(this).data('oldValue'));
     }


 });
 $(".input-number").keydown(function(e) {
     // Allow: backspace, delete, tab, escape, enter and .
     if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
         // Allow: Ctrl+A
         (e.keyCode == 65 && e.ctrlKey === true) ||
         // Allow: home, end, left, right
         (e.keyCode >= 35 && e.keyCode <= 39)) {
         // let it happen, don't do anything
         return;
     }
     // Ensure that it is a number and stop the keypress
     if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
         e.preventDefault();
     }
 });
 </script>


</div>
   </section>                </div>
             </div>
         </div>
     </div>
    </head>
     <div class="about-us">
      <div class="container">
          <div class="row">
              <div class="col-sm-6">
                  <section id="text-70" class="widget p-2 widget_text"><h1 class="widget-title">About us</h1>			<div class="textwidget"><p>Excellentwiters247.org is an online academic writing company offering core academic writing services to its clients widespread in the global precincts. We are among the leaders in the academic writing services and hold the capacity to bring about unprecedented academic success to our customers. Our experienced and professional academic writers are capable of helping you in dissertation, research papers, term paper, and essay in a number of topics such as accounting, business, ethics, history, economics, law, biology, chemistry, mathematics, communication, nursing, physics, religious studies and technology among others. Students around the globe have relied on our premium and dependable online academic writing services for several years we have been in the industry. We assist scholars by providing them with customized dissertations, customized research papers, customized term papers and customized essays based on the precise provisions and deadline they give. We have employed professional scholarly writers who write custom papers from scratch, implying that every paper is one of its kind.</p>
<p>&nbsp;</p>
<p><a class="btn btn-primary shadow-sm" href="/orders/">ORDER NOW</a></p>
</div>
</section>                    </div>
<div class="col-sm-3"> <section id="text-74" class="card widget about-us-item p-2 widget_text text-center">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794366" src="https://assignmentpremier.com/wp-content/uploads/2019/11/icon_feather.png" alt="" width="58" height="60" /></p>
   <p>Writers support 24/7</p>
   </div>
         </section><section id="text-73" class="card widget about-us-item p-2 widget_text text-center">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794364" src="https://assignmentpremier.com/wp-content/uploads/2019/11/icon_clock.png" alt="" width="54" height="54" /></p>
   <p>Quality guaranteed</p>
   </div>
         </section><section id="text-71" class="card widget about-us-item p-2 widget_text text-center">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794361" src="https://assignmentpremier.com/wp-content/uploads/2019/11/icon_24h.png" alt="" width="50" height="54" /></p>
   <p>Chat with writer</p>
   </div>
         </section></div>
                       <div class="col-sm-3 about-right-p"> <section id="text-72" class="card widget about-us-item p-2 widget_text text-center">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794365" src="https://assignmentpremier.com/wp-content/uploads/2019/11/icon_desktop.png" alt="" width="52" height="54" /></p>
   <p>Custom Essays</p>
   </div>
         </section><section id="text-75" class="card widget about-us-item p-2 widget_text text-center">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794362" src="https://assignmentpremier.com/wp-content/uploads/2019/11/icon_book.png" alt="" width="56" height="49" /></p>
   <p>100% Plagiarism free</p>
   </div>
         </section><section id="text-76" class="card widget about-us-item p-2 widget_text text-center">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794365" src="https://assignmentpremier.com/wp-content/uploads/2019/11/icon_desktop.png" alt="" width="52" height="54" /></p>
   <p>Academic Help</p>
   </div>
         </section></div>
   
                   </div>
   
               </div>
           </div>
           <div class=" card payment-methods p-3 bg-white">
            <div class="container">
                <div class="row">

                    <section id="text-77" class="widget col p-2 widget_text">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794369" src="https://assignmentpremier.com/wp-content/uploads/2019/11/pay-2.png" alt="" width="143" height="50" /></p>
</div>
		</section><section id="text-78" class="widget col p-2 widget_text">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794370" src="https://assignmentpremier.com/wp-content/uploads/2019/11/pay-4.png" alt="" width="164" height="40" /></p>
</div>
		</section><section id="text-79" class="widget col p-2 widget_text">			<div class="textwidget"><p><img class="alignnone size-medium wp-image-794368" src="https://assignmentpremier.com/wp-content/uploads/2019/11/one-300x80.png" alt="" width="300" height="80" /></p>
</div>
		</section><section id="text-80" class="widget col p-2 widget_text">			<div class="textwidget"><p><img class="alignnone size-medium wp-image-794367" src="https://assignmentpremier.com/wp-content/uploads/2019/11/mastercard-visa-300x111.png" alt="" width="300" height="111" /></p>
</div>
		</section>

                </div>
            </div>
        </div>
        <div class="recent-orders">
         <div class="container">
             <div class="row">
                 <div class="col-sm-4"><section id="text-81" class="widget p-2 widget_text">
                     <div class="text-widget"><p>Wondering if this job covers your intellectual ambitions? 
            Working with us, you can choose orders of different subjects, deadlines, and levels of complexity. Here is a small portion of what we&#8217;ve offered earlier today.</p>
            <div class="card text-white bg-white mb-3" style="max-width: 18rem;">
               
                <div class="card-body">
                  <ul>
                      <li class="text-dark">nelson</li>
                      <li class="text-dark">nelson</li>
                      <li class="text-dark">nelson</li>
                      <li class="text-dark">nelson</li>
                      <li class="text-dark">nelson</li>
                      <li class="text-dark">nelson</li>
                  </ul>
                </div>
              </div>
</div>
   </section>
</div>
                 <div class="col-sm-8"> <section id="text-82" class="widget p-2 widget_text">			<div class="textwidget"><div class="optopwriters">
 <style>
 .oplistbottom {
     text-align: center;
     padding: 5px 10px;
     background: #f7f7f7;
 }

 @media screen and (max-width: 768px) {
     .hide-mobile {
         display: none;
     }
 }

 .recent-orders-item {
     padding: 17px 0;
     -webkit-border-radius: 6px;
     border-radius: 6px;
     background-color: #ffffff;
     -webkit-box-shadow: 0 6px 11px rgba(0, 0, 0, 0.24);
     box-shadow: 0 6px 11px rgba(0, 0, 0, 0.24);
     margin: 7px 0;
     font-size: 11px;
 }

 .opc1btn {
     background-color: #ffb84d;
     color: #fff;
     padding: 10px 15px;
     border-radius: 0px;
     text-align: center;
 }
 </style>

 


 <div class="row p-2 text-center">
     <div class="col-2">ID</div>
     <div class="col-2">Title</div>
     <div class="col-4">Subject</div>
     <div class="col-2">Pages</div>
     <div class="col-2 hide-mobile">Level</div>
 </div>

     <div class="row recent-orders-item text-center">
     <div class="col-2">#10186 </div>
     <div class="col-3 text-success">
         Check        </div>
     <div class="col-3 text-muted"> Engineering        </div>
     <div class="col-2 text-muted"> 5 Pages</div>
     <div class="col-2 hide-mobile">Masters</div>

 </div>
 <hr style="margin-top: 5px; margin-bottom: 5px">
     <div class="row recent-orders-item text-center">
     <div class="col-2">#10185 </div>
     <div class="col-3 text-success">
         cgert        </div>
     <div class="col-3 text-muted"> Engineering        </div>
     <div class="col-2 text-muted"> 12 Pages</div>
     <div class="col-2 hide-mobile">Masters</div>

 </div>
 <hr style="margin-top: 5px; margin-bottom: 5px">
     <div class="row recent-orders-item text-center">
     <div class="col-2">#10184 </div>
     <div class="col-3 text-success">
         Macroeconomics        </div>
     <div class="col-3 text-muted"> Economics        </div>
     <div class="col-2 text-muted"> 2 Pages</div>
     <div class="col-2 hide-mobile">Masters</div>

 </div>
 <hr style="margin-top: 5px; margin-bottom: 5px">
     <div class="row recent-orders-item text-center">
     <div class="col-2">#10183 </div>
     <div class="col-3 text-success">
         Poetry Essay         </div>
     <div class="col-3 text-muted"> Literature        </div>
     <div class="col-2 text-muted"> 3 Pages</div>
     <div class="col-2 hide-mobile">Undergraduate</div>

 </div>
 <hr style="margin-top: 5px; margin-bottom: 5px">
     <div class="row recent-orders-item text-center">
     <div class="col-2">#10182 </div>
     <div class="col-3 text-success">
         Macroeconomics        </div>
     <div class="col-3 text-muted"> Economics        </div>
     <div class="col-2 text-muted"> 1 Pages</div>
     <div class="col-2 hide-mobile">Masters</div>

 </div>
 <hr style="margin-top: 5px; margin-bottom: 5px">
 




</div>
</div>
   </section></div>
             </div>

         </div>
     </div>

     <div class="how-it-works">
         <div class="container">
             <h2> How it Works </h2>
             <div class="row">
                 <section id="text-91" class="widget col-6 col-md-3 widget_text">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794371" src="https://assignmentpremier.com/wp-content/uploads/2019/11/hiw-1.png" alt="" width="160" height="123" /></p>
<div class="hiw-steps-title">Sign up</div>
<div class="hiw-steps-info">Fill the form in less than 1 minutes.</div>
</div>
   </section><section id="text-92" class="widget col-6 col-md-3 widget_text">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794372" src="https://assignmentpremier.com/wp-content/uploads/2019/11/hiw-2.png" alt="" width="154" height="114" /></p>
<div class="hiw-steps-title">Fill order details</div>
<div class="hiw-steps-info">Fill your essay requirements and submit.</div>
</div>
   </section><section id="text-93" class="widget col-6 col-md-3 widget_text">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794373" src="https://assignmentpremier.com/wp-content/uploads/2019/11/hiw-3.png" alt="" width="205" height="104" /></p>
<div class="hiw-steps-title">Pay for your order</div>
<div class="hiw-steps-info">Pay for the order and let our writers start on it.</div>
</div>
   </section><section id="text-94" class="widget col-6 col-md-3 widget_text">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794374" src="https://assignmentpremier.com/wp-content/uploads/2019/11/hiw-4.png" alt="" width="206" height="118" /></p>
<div class="hiw-steps-title">Download Completed</div>
<div class="hiw-steps-info">Download your completed order from your personalized account.</div>
</div>
   </section>                </div>

         </div>
     </div>
     <div class="testimonials">
      <div class="container">
          <div class="row">
              <div class="col-sm-4"><section id="text-95" class="widget widget_text"><h1 class="widget-title p-2">Our Top Services</h1>			<div class="textwidget"><p>Coursework</p>
<p>Personal Statements</p>
<p>Presentations</p>
<p>Speeches</p>
<p>Term Papers</p>
<p>Research Proposals</p>
<p>Annotated Bibliographies</p>
<p>Book Reviews</p>
<p>Book Reports</p>
<p>Movie Reviews</p>
<p>Term Papers</p>
<p>Essay Writing</p>
<p>Research Papers</p>
<p>Dissertations</p>
<p>Admission Essays</p>
<p>Journal writing</p>
<p>multiply choice questions</p>
<p>Letter Writing</p>
<p>Marketing Course-work Assignments</p>
<p>Financial Assignment Solutions</p>
<p>Cv Writing</p>
<p>Business Plans</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</section></div>
              <div class="col-sm-8"> <section id="text-96" class="widget  widget_text"><h1 class="widget-title p-2">Testimonials</h1>			<div class="textwidget"><h5 class="colored-text">Renalwad Holman</h5>
<div class="small-text">Fast delivery!</div>
<p>I had a short deadline to complete my essay but I had no idea how to go about it. Topessayswriter.com managed to deliver a superb article within such a short period. This site really saved me. This is one of the best experiences I have received so far and I’m truly grateful</p>
<h5 class="colored-text">Janeen Gibs</h5>
<div class="small-text">Revisions done quickly</div>
<p>After receiving my finished paper, I had a few revisions that had to be done. I communicated them to the writer assigned to my order and within 30 minutes, all my requests had been implemented in the revised copy! Am so happy to have chosen Topessayswriter.</p>
<h5 class="colored-text">Tim Carp Opallah</h5>
<div class="small-text">Original content</div>
<p>I had a bad experience while using another site as the work which was delivered was not original. I was skeptic at first while using Excellent Writers 247 but after they delivered an original article to me, I knew I had found a professional website. Best site so far.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</section><section id="media_image-4" class="widget  widget_media_image"><a href="https://excellentwriters247.org/order"><img width="1080" height="420" src="https://excellentwriters247.org/wp-content/uploads/2020/08/1a0cc195-6413-4066-a978-4f96baa066b3.jpg" class="image wp-image-794463  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" srcset="https://excellentwriters247.org/wp-content/uploads/2020/08/1a0cc195-6413-4066-a978-4f96baa066b3.jpg 1080w, https://excellentwriters247.org/wp-content/uploads/2020/08/1a0cc195-6413-4066-a978-4f96baa066b3-300x117.jpg 300w, https://excellentwriters247.org/wp-content/uploads/2020/08/1a0cc195-6413-4066-a978-4f96baa066b3-1024x398.jpg 1024w, https://excellentwriters247.org/wp-content/uploads/2020/08/1a0cc195-6413-4066-a978-4f96baa066b3-768x299.jpg 768w" sizes="(max-width: 1080px) 100vw, 1080px" /></a></section></div>
          </div>

      </div>
  </div>



  <div class="writing-jobs-section">
      <div class="container">
          <h2> About Our Writers </h2>
          <div class="row">
              <section id="text-110" class="widget writing-jobs-item col-12 m-3 col-md-3 widget_text"><h3 class="widget-title p-2">Essay Writing Services</h3>			<div class="textwidget"><p>At Excellent Writers 247, we prioritize on all aspects that bring about a good grade such as impeccable grammar, proper structure, zero-plagiarism and conformance to guidelines. Our experienced team of writers will help you completed your essays and other assignments.</p>
</div>
</section><section id="text-109" class="widget writing-jobs-item col-12 m-3 col-md-3 widget_text"><h3 class="widget-title p-2">Admission and Business Papers</h3>			<div class="textwidget"><p>Be assured that you’ll definitely get accepted to the Master’s level program at any university once you enter all the details in the order form. We won’t leave you here; we will also help you secure a good position in your aspired workplace by creating an outstanding resume or portfolio once you place an order.</p>
</div>
</section><section id="text-108" class="widget writing-jobs-item col-12 m-3 col-md-3 widget_text"><h3 class="widget-title p-2">Editing and Proofreading</h3>			<div class="textwidget"><p>Our skilled editing and writing team will help you restructure you paper, paraphrase, correct grammar and replace plagiarized sections on your paper just on time. The service is geared toward eliminating any mistakes and rather enhancing better quality.</p>
</div>
</section><section id="text-97" class="widget writing-jobs-item col-12 m-3 col-md-3 widget_text">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794361" src="https://assignmentpremier.com/wp-content/uploads/2019/11/icon_24h.png" alt="" width="50" height="54" /></p>
<p>All custom papers are prepared by qualified writers according to your instructions and, therefore, exclude any chance of plagiarism. We have a large staff of academic writers, including native speakers from the USA, the UK, Canada, and Australia. Thus, we can quickly find the most suitable one for your specific order.</p>
</div>
</section><section id="text-98" class="widget writing-jobs-item col-12 m-3 col-md-3 widget_text">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794364" src="https://assignmentpremier.com/wp-content/uploads/2019/11/icon_clock.png" alt="" width="54" height="54" /></p>
<p>We complete all assignments from scratch, which are not connected to any essay databases. This means we do not resell any paper. In addition, before sending your paper to you, we check it for plagiarism to make sure it has no copy-pasted parts.</p>
</div>
</section><section id="text-99" class="widget writing-jobs-item col-12 m-3 col-md-3 widget_text">			<div class="textwidget"><p><img class="alignnone size-full wp-image-794363" src="https://assignmentpremier.com/wp-content/uploads/2019/11/icon_book_pencil.png" alt="" width="48" height="59" /></p>
<p class="">Your security and privacy are our top priorities. This is why we never share your personal details with any third parties. Additionally, we use only cutting-edge technology solutions to ensure you can safely browse our website.</p>
</div>
</section>                </div>

          <div class="text-center"> <a href="/order/"> Get Started </a> </div>

      </div>
  </div>

  <div id="content" class="site-content">
      <div class="container">
          <div class="row">
              
<section id="primary" class="content-area col-sm-12 col-lg-12">
<main id="main" class="site-main" role="main">

   
<article id="post-7" class="post-7 page type-page status-publish hentry">
 <header class="entry-header">
<h1 class="entry-title">Who we are</h1>	</header><!-- .entry-header -->

<div class="entry-content">
<p>[vc_row][vc_column][vc_gallery type=&#8221;flexslider_slide&#8221; interval=&#8221;0&#8243; images=&#8221;249,248&#8243; img_size=&#8221;full&#8221; onclick=&#8221;&#8221;][vc_empty_space height=&#8221;40px&#8221;][vc_column_text]</p>
<h4 class="no-margin-top">Overview Company</h4>
<p><strong>Research Based Sales Training, Sales Coaching &amp; Sales Consulting</strong></p>
<p>At Cosine we’ve earned a reputation for providing sales people with the insights they need to dominate in today’s hyper-competitive selling climate.</p>
<p>Cosine is a research based sales training, sales coaching and sales consulting firm that is the leader in the integration of proven science and sales. Based in New York, United States, we study the scientific disciplines of social psychology, communication theory, cognitive psychology, social neuroscience, cognitive neuroscience and behavioral economics. We then take the repeatable and predictable principles, which science has proven to create and enable influence, out of the laboratory and academic journals and apply them to selling.</p>
<p>What’s more, we have conducted original scientific research that identified the mental process that the human brain goes through when making a buying decision.  We then deconstructed this internal decision making process into clear, manageable steps that equip sales people to literally sell the way that their prospects’ brains are hardwired to buy.</p>
<p>When sales people base their sales activities and behaviors upon proven science, the results are always astounding:  sales cycles shorten, market share grows, and sales production skyrockets.[/vc_column_text][vc_empty_space height=&#8221;40px&#8221;][vc_column_text]</p>
<h4 class="no-margin-top">Why Cosine?</h4>
<p>We help the world’s leading companies drive predictable revenue and profitability growth by optimizing sales organization performance.[/vc_column_text][vc_empty_space height=&#8221;30px&#8221;][vc_row_inner][vc_column_inner width=&#8221;1/4&#8243;][counter value=&#8221;65&#8243; duration=&#8221;1000&#8243; icon=&#8221;fa-signing&#8221; title=&#8221;Cosine has worked with 65% of the Fortune 500&#8243; suffix=&#8221;%&#8221;][/vc_column_inner][vc_column_inner width=&#8221;1/4&#8243;][counter value=&#8221;1000&#8243; duration=&#8221;1000&#8243; icon=&#8221;fa-users&#8221; title=&#8221;Trained over 1,000 sales professionals worldwide&#8221; suffix=&#8221;+&#8221;][/vc_column_inner][vc_column_inner width=&#8221;1/4&#8243;][counter value=&#8221;50&#8243; duration=&#8221;1000&#8243; icon=&#8221;fa-globe&#8221; title=&#8221;Delivered programs in over 50 countries&#8221; suffix=&#8221;countries&#8221;][/vc_column_inner][vc_column_inner width=&#8221;1/4&#8243;][counter value=&#8221;8&#8243; duration=&#8221;1000&#8243; icon=&#8221;fa-trophy&#8221; title=&#8221;8 straight years as a top sales training company&#8221; suffix=&#8221;years&#8221;][/vc_column_inner][/vc_row_inner][vc_empty_space height=&#8221;50px&#8221;][vc_row_inner][vc_column_inner width=&#8221;1/2&#8243;][vc_column_text]</p>
<h4 class="no-margin-top">Why Are We Different?</h4>
<p>Our clients tell us we are unique for a variety of important reasons including:</p>
<ul class="style1">
<li>Deep customization</li>
<li>Industry specialization</li>
<li>Interactive learning</li>
<li>Extensive curriculum</li>
<li>Traditional and digital delivery modalities</li>
<li>Experienced and expert facilitators</li>
<li>Results in initiating and sustaining change through the organization</li>
</ul>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width=&#8221;1/2&#8243;][vc_column_text][video_lightbox_youtube video_id=&#8221;2Ge1GGitzLw&#8221; width=&#8221;800&#8243; height=&#8221;500&#8243; anchor=&#8221;https://keonline.co.ke/skyline/wp-content/uploads/2016/04/11.jpg&#8221;][/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height=&#8221;50px&#8221;][vc_tta_accordion][vc_tta_section title=&#8221;Cosine’s Mission&#8221; tab_id=&#8221;1461810867516-0c9c3955-6959&#8243;][vc_column_text]Cosine is all about the client and our mission is to make you successful. We work with business and sales leaders to improve performance and deliver tangible results. Our belief is that we must do more than just deliver our capabilities and services – we must own results with our clients.[/vc_column_text][/vc_tta_section][vc_tta_section title=&#8221;Cosine&#8217;s Vision&#8221; tab_id=&#8221;1461810867637-8c99c5c0-52cb&#8221;][vc_column_text]Our vision is to help clients achieve their highest levels of sales and customer success by generating demand, winning opportunities, growing accounts, and managing sales performance. We seek to accomplish this through a single platform of assessments and analytics, learning, and sales process playbooks. The Cosine approach enables a faster and more successful execution of sales improvement initiatives.[/vc_column_text][/vc_tta_section][vc_tta_section title=&#8221;Cosine&#8217;s Values&#8221; tab_id=&#8221;1461811016911-b47f1946-d095&#8243;][vc_column_text]At Cosine, we value honesty and integrity above all else, and highly value customer and employee loyalty. We also believe in giving back to our communities, making them better places to live.[/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][/vc_row]</p>
</div><!-- .entry-content -->

</article><!-- #post-## -->

</main><!-- #main -->
</section><!-- #primary -->



</div><!-- .row -->
</div><!-- .container -->
</div><!-- #content -->

<div class="better-works">
<div class="container">
  <div class="row">
      <section id="text-83" class="widget col p-2 widget_text"><h1 class="widget-title">Pay Little, Get Better Work &#038; Better Grade</h1>			<div class="textwidget"><p>Our prices depend on the urgency of your assignment, your academic level, the course subject, and the length of the assignment. Basically, more complex assignments will cost more than simpler ones. The level of expertise is also a major determinant of the price of your assignment.</p>
</div>
</section><section id="text-84" class="widget col p-2 widget_text">			<div class="textwidget"><p><a href="/order/">ORDER NOW</a></p>
</div>
</section>        </div>

</div>
</div>
<footer id="colophon" class="site-footer p-4" role="contentinfo">


<div id="footer-widget" class="row m-0 bg-light">
<div class="container">
  <div class="row">
                  <div class="col-sm-4 col-md-4"><section id="text-111" class="widget col widget_text"><h3 class="widget-title">Top Services</h3>			<div class="textwidget"><ul>
<li><a href="https://excellentwriters247.org/order/">Coursework</a></li>
<li><a href="https://excellentwriters247.org/order/">Personal Statements</a></li>
<li><a href="https://excellentwriters247.org/order/">Presentations</a></li>
<li><a href="https://excellentwriters247.org/order/">Speeches</a></li>
<li><a href="https://excellentwriters247.org/order/">Term Papers</a></li>
<li><a href="https://excellentwriters247.org/order/">Research Proposals</a></li>
<li><a href="https://excellentwriters247.org/order/">Annotated Bibliographies</a></li>
<li><a href="https://excellentwriters247.org/order/">Book Reviews</a></li>
<li><a href="https://excellentwriters247.org/order/">Book Reports</a></li>
<li><a href="https://excellentwriters247.org/order/">Movie Reviews</a></li>
<li><a href="https://excellentwriters247.org/order/">Term Papers</a></li>
<li><a href="https://excellentwriters247.org/order/">Essay Writing</a></li>
<li><a href="https://excellentwriters247.org/order/">Research Papers</a></li>
<li><a href="https://excellentwriters247.org/order/">Dissertations</a></li>
</ul>
</div>
</section></div>
                              <div class="col-sm-4 col-md-4"><section id="text-107" class="widget col widget_text"><h3 class="widget-title">Our Services Coverage</h3>			<div class="textwidget"><ul>
<li><a href="https://excellentwriters247.org/order/">Admission and Business Papers</a></li>
<li><a href="https://excellentwriters247.org/order/">Essay Writing Services</a></li>
<li><a href="https://excellentwriters247.org/order/">Editing and Proofreading</a></li>
<li><a href="https://excellentwriters247.org/order/">Technical papers</a></li>
<li><a href="https://excellentwriters247.org/order/">College Essay Writing</a></li>
<li><a href="https://excellentwriters247.org/order/">Homework Help</a></li>
<li><a href="https://excellentwriters247.org/order/">multiply choice questions</a></li>
<li><a href="https://excellentwriters247.org/order/">Letter Writing</a></li>
<li><a href="https://excellentwriters247.org/order/">Marketing Course-work Assignments</a></li>
<li><a href="https://excellentwriters247.org/order/">Financial Assignment Solutions</a></li>
<li><a href="https://excellentwriters247.org/order/">Cv Writing</a></li>
<li><a href="https://excellentwriters247.org/order/">Business Plans</a></li>
<li><a href="https://excellentwriters247.org/order/">Admission Essays</a></li>
<li><a href="https://excellentwriters247.org/order/">Journal writing</a></li>
</ul>
</div>
</section></div>
                              <div class="col-sm-4 col-md-4"><section id="text-64" class="widget col widget_text"><h3 class="widget-title">We Accept</h3>			<div class="textwidget"><p><img class="alignnone size-medium wp-image-794287" src="https://assignmentpremier.com/wp-content/uploads/2019/09/We-Accept-300x61-300x61.png" alt="" width="300" height="61" /></p>
</div>
</section><section id="text-66" class="widget col widget_text"><h3 class="widget-title">Attention!</h3>			<div class="textwidget"><p class="lighter">Using this writing service is legal and is not prohibited by any university/college policies.</p>
<div class="copyright">
<div class="copyright-text">© 2020 Excellent Writers 247<br />
All Rights Reserved.</div>
<div>Designed &amp; Developed By Web Expert Solutions</div>
</div>
</div>
</section></div>
              </div>
</div>
</div>


</footer>
   </div>

       @endsection
     
    
