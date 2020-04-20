@extends('layout.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="css/styles/homestyle.css" rel="stylesheet" type="text/css">

@section('body')
  

   <center><h3 style="font-size:35px;"><b>FOOD ORDER</b></h3></center><br />

      <form  mathod="post" action="/store">
       {{csrf_field()}}
        <div class="row">
    <div class="col-md-4">

   <h1>Main Dishes</h1>

<div id="Maindish">
   @foreach ($mains as $main)
  <label><input type="checkbox" id="M-{{$main->id}}" name="main[]" value="{{$main->id}}">{{$main->Maindish}}</label>
  <input type="text"  id="M-{{$main->Maindish}}" name="Mamount[]" disabled>
   @endforeach
 </div>
</div>

<div class="col-md-4">
<div id="Sidedish">
  <h1>Side Dishes</h1>
   @foreach ($sides as $side)
  <label><input type="checkbox" id="S-{{$side->id}}" name="side[]" value="{{$side->id}}">{{$side->Sidedish}}</label>
  <input type="text" id="S-{{$side->Sidedish}}" name="Samount[]" disabled>
  @endforeach
</div>
</div>

<div class="col-md-4">
  <h1>Desserts</h1>
    @foreach ($desserts as $dessert)
  <label><input type="checkbox" id="D-{{$dessert->id}}" name="dessert[]" value="{{$dessert->id}}">{{$dessert->Dessert}}</label>
  <input type="text" id="D-{{$dessert->Dessert}}" name="Damount[]" disabled>
  @endforeach
</div>
</div>

       <button type="submit"  class="btn">SUBMIT</button>
  

      </form>




<script type="text/javascript">
  
// CHECK CHECHBOX IS CHECKED

  (function() {
    const form = document.querySelector('#Maindish');
    const checkboxes = form.querySelectorAll('input[type=checkbox]');
    const checkboxLength = checkboxes.length;
    const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;
    
    function init() {
        if (firstCheckbox) {
            for (let i = 0; i < checkboxLength; i++) {
                checkboxes[i].addEventListener('change', checkValidity);
            }

            checkValidity();
        }

    }

    function isChecked() {
        for (let i = 0; i < checkboxLength; i++) {
            if (checkboxes[i].checked) return true;
        }

        return false;
    }

    function checkValidity() {
        const errorMessage = !isChecked() ? 'At least one checkbox must be selected.' : '';
        firstCheckbox.setCustomValidity(errorMessage);
    }

    init();
})();


(function() {
    const form = document.querySelector('#Sidedish');
    const checkboxes = form.querySelectorAll('input[type=checkbox]');
    const checkboxLength = checkboxes.length;
    const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

    function init() {
        if (firstCheckbox) {
            for (let i = 0; i < checkboxLength; i++) {
                checkboxes[i].addEventListener('change', checkValidity);
            }

            checkValidity();
        }
    }

    function isChecked() {
        for (let i = 0; i < checkboxLength; i++) {
            if (checkboxes[i].checked) return true;
           
        }

        return false;
    }

    function checkValidity() {
        const errorMessage = !isChecked() ? 'At least one checkbox must be selected.' : '';
        firstCheckbox.setCustomValidity(errorMessage);
    }

    init();
})();

// CHECK TEXT FELID FILLE

@foreach ($mains as $main)

document.getElementById("M-{{$main->id}}").addEventListener('change', function(){
      document.getElementById("M-{{$main->Maindish}}").disabled = false;
      document.getElementById("M-{{$main->Maindish}}").required =  this.checked;
})

@endforeach

@foreach ($sides as $side)
document.getElementById("S-{{$side->id}}").addEventListener('change', function(){
      document.getElementById("S-{{$side->Sidedish}}").disabled = false; 
      document.getElementById("S-{{$side->Sidedish}}").required =  this.checked;
})
@endforeach

@foreach ($desserts as $dessert)
document.getElementById("D-{{$dessert->id}}").addEventListener('change', function(){
      document.getElementById("D-{{$dessert->Dessert}}").disabled = false; 
      document.getElementById("D-{{$dessert->Dessert}}").required =  this.checked;
})
@endforeach



</script>


@endsection