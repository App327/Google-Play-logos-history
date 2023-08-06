function getSelectedDates(e) {
  let selectedValue = e.target.value;
  let wmCheckbox = document.getElementById('wordmark-chbx');
  let wmLabel = document.getElementById('wm-label');
  let types = document.getElementById('types');
  let sizes = document.getElementById('sizes');
  let products = document.getElementById('products').value;

  if (selectedValue == "2013-2015") {
   wmCheckbox.setAttribute('checked', '');
   wmLabel.style.color = 'grey';
   wmCheckbox.setAttribute('disabled', '');
  } else {
   if (selectedValue == "2015-2016") {
    wmCheckbox.setAttribute('disabled', '');
    wmLabel.style.color = 'grey';
    wmCheckbox.setAttribute('checked', '');
   } else {
    wmCheckbox.removeAttribute('disabled');
    wmLabel.style.color = 'black';
    wmCheckbox.removeAttribute('checked');
   }
  }

  if (selectedValue == "2013-2014") {
   types.setAttribute('disabled', '');
   types.value = 'png';
   sizes.setAttribute('disabled', '');
   sizes.value = 'max';
  }
  else {
   if (selectedValue == "2014-2016") {
    types.setAttribute('disabled', '');
    types.value = 'png';
    sizes.setAttribute('disabled', '');
    sizes.value = 'max';
   }
   else {
    if (selectedValue == "2010-2012") {
     types.setAttribute('disabled', '');
     types.value = 'png';
     sizes.setAttribute('disabled', '');
     sizes.value = 'max';
    }
    else {
     if (selectedValue == "2012-2014" && wmCheckbox.checked == false && products !== "Google Play Store") {
      types.setAttribute('disabled', '');
      types.value = 'png';
      sizes.setAttribute('disabled', '');
      sizes.value = 'max';
     }
     else {
      if (selectedValue == "2012-2013") {
       types.setAttribute('disabled', '');
       types.value = 'png';
       sizes.setAttribute('disabled', '');
       sizes.value = 'max';
      }
      else {
       if (selectedValue == "2011-2012") {
        types.setAttribute('disabled', '');
        types.value = 'png';
        sizes.setAttribute('disabled', '');
        sizes.value = 'max';
       }
       else {
        if (selectedValue == "2013-2015") {
         types.setAttribute('disabled', '');
         types.value = 'png';
         sizes.setAttribute('disabled', '');
         sizes.value = 'max';
        }
        else {
         if (selectedValue == "2012-2014" && wmCheckbox.checked == true && products == "Google Play Store") {
          types.removeAttribute('disabled');
          sizes.removeAttribute('disabled');
         }
         else {
          types.removeAttribute('disabled');
          sizes.removeAttribute('disabled');
         }
        }
       }
      }
     }
    }
   }
  }
}

let dates = document.querySelector('#dates');

dates.addEventListener('change', function(e) {  
  getSelectedDates(e);
});

function getSelectedTypes(e) {
  let selectedValue = e.target.value;
  let sizes = document.querySelector('#sizes');

  if (selectedValue == "svg") {
   sizes.setAttribute('disabled', '');
  } else {
   sizes.removeAttribute('disabled');
  }
}

let types = document.querySelector('#types');

types.addEventListener('change', function(e) {  
  getSelectedTypes(e)
});


let reset = document.getElementById('reset');

reset.onclick = function() {
 resetData();
}

function resetData() {
  let wmCheckbox = document.getElementById('wordmark-chbx');
  let wmLabel = document.getElementById('wm-label');
  let sizes = document.querySelector('#sizes');
  let types = document.getElementById('types');
  wmCheckbox.removeAttribute('disabled');
  wmLabel.style.color = 'black';
  wmCheckbox.removeAttribute('checked');
  sizes.removeAttribute('disabled');
  types.removeAttribute('disabled');
}