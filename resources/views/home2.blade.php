@extends('layout.app')
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
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

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}




</style>
@section('title','Paradise Restaurant')

@section('body')
  

   <center><h3>FOOD ORDER</h3></center>

      <form  mathod="post" action="/action_page.php">

   <h1>Main Dishes</h1>

<div id="Maindish">
  <label><input type="checkbox" id="1" value="1">Rice</label>
  <input type="text"  id="Rice" name="Rice">
   <label><input type="checkbox" id="2" value="2">Rotty</label>
  <input type="text"  id="Rotty" name="Rotty">
   <label><input type="checkbox" id="3" value="3">Noodles</label>
  <input type="text"  id="Noodles" name="Noodles">
 </div>

<div id="Sidedish">
  <h1>Side Dishes</h1> 
  <label><input type="checkbox" id="11" value="1" >Wadai</label>
  <input type="text" id="Wadai" name="Wadai">
  <label><input type="checkbox" id="22" value="2" >Dhal Curry</label>
  <input type="text" id="Dhal" name="Dhal Curry">
  <label><input type="checkbox" id="33" value="3" >Fish Curry</label>
  <input type="text" id="Fish" name="Fish Curry">
  
</div>

  <h1>Desserts</h1>
  <label><input type="checkbox" id="111" value="1" >Watalappam</label>
  <input type="text" id="Watalappam" name="Watalappam">
  <label><input type="checkbox" id="222" value="2" >Jelly</label>
  <input type="text" id="Jelly" name="Jelly">
  <label><input type="checkbox" id="333" value="3" >Pudding</label>
  <input type="text" id="Pudding" name="Pudding">
  

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>

        <input type="submit" value="SUBMIT" class="btn">
  

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

