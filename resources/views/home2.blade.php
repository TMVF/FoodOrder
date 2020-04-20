@extends('layout.app')
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

/*.btn {
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 31%;
  margin-left:350px; 
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}*/

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@section('title','Paradise Restaurant')

@section('body')



   <center><h3>FOOD ORDER</h3></center><br />


      <form  mathod="post" action="/action_page.php">
      
       <!--  <div class="ui-g-6 ui-lg-6 ui-xl-6 ui-md-6 ui-sm-6"> -->
       
    
  <div class="row">
    <div class="col-md-4">
   <h1>Main Dishes</h1>
<div id="Maindish">
<!--  <div class="form-group"> -->
  <label><input type="checkbox" id="1" value="1">Rice</label>
<!-- </div> -->
  <input type="text"  id="Rice" name="Rice">
   <label><input type="checkbox" id="2" value="2">Rotty</label>
  <input type="text"  id="Rotty" name="Rotty">
   <label><input type="checkbox" id="3" value="3">Noodles</label>
  <input type="text"  id="Noodles" name="Noodles">
 </div>
</div>

<div class="col-md-4">
<div id="Sidedish">
  <h1>Side Dishes</h1> 
  <label><input type="checkbox" id="11" value="1" >Wadai</label>
  <input type="text" id="Wadai" name="Wadai">
  <label><input type="checkbox" id="22" value="2" >Dhal Curry</label>
  <input type="text" id="Dhal" name="Dhal Curry">
  <label><input type="checkbox" id="33" value="3" >Fish Curry</label>
  <input type="text" id="Fish" name="Fish Curry">
</div>
</div>


<div class="col-md-4">
  <h1>Desserts</h1>
  <label><input type="checkbox" id="111" value="1" >Watalappam</label>
  <input type="text" id="Watalappam" name="Watalappam">
  <label><input type="checkbox" id="222" value="2" >Jelly</label>
  <input type="text" id="Jelly" name="Jelly">
  <label><input type="checkbox" id="333" value="3" >Pudding</label>
  <input type="text" id="Pudding" name="Pudding">
</div>
  
   </div>

        <button type="submit" class="btn">SUBMIT</button> 
 
      </form>



<script type="text/javascript">
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



document.getElementById("1").addEventListener('change', function(){
      document.getElementById("Rice").required =  this.checked;
})
document.getElementById("2").addEventListener('change', function(){
      document.getElementById("Rotty").required =  this.checked;
})
document.getElementById("3").addEventListener('change', function(){
      document.getElementById("Noodles").required =  this.checked;
})


document.getElementById("11").addEventListener('change', function(){
      document.getElementById("Wadai").required =  this.checked;
})
document.getElementById("22").addEventListener('change', function(){
      document.getElementById("Dhal").required =  this.checked;
})
document.getElementById("33").addEventListener('change', function(){
      document.getElementById("Fish").required =  this.checked;
})


document.getElementById("111").addEventListener('change', function(){
      document.getElementById("Watalappam").required =  this.checked;
})
document.getElementById("222").addEventListener('change', function(){
      document.getElementById("Jelly").required =  this.checked;
})
document.getElementById("333").addEventListener('change', function(){
      document.getElementById("Pudding").required =  this.checked;
})



</script>

    @endsection

