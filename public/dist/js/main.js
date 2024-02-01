const clicking=document.querySelectorAll('.clicking').forEach((item)=>{
  item.addEventListener('click',()=>{
   alert('You didnot have the Proper right');
  })
})


const inverterRow=document.getElementById('inverterRow');
inverterRow.addEventListener('click',()=>{
console.log("sdfg");
  moveToNextPage()
})
  function moveToNextPage() {

            let nextPageUrl = 'popup';
            window.location.href = nextPageUrl;
}
