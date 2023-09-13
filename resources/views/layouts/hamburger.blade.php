<div class="px-2 absolute z-50 p-2 px-5 cursor-pointer lg:hidden hamburger transition-all transition rounded shadow-xl top-8 left-72 grid grid-cols-1 gap-1 w-24">
    <div class="p-1 bg-slate-600 w-full transition-all transition hl"></div>
    <div class="p-1 bg-slate-600 w-full transition-all transition hl"></div>
    <div class="p-1 bg-slate-600 w-full transition-all transition hl"></div>

</div>
<script>
document.querySelector('.hamburger').addEventListener('click', function(e){
    e.preventDefault()    
    
    Array.from(document.querySelectorAll('.hl')).forEach((el, key) => {
        console.log(key)
        if(key % 2 == 0){
            el.classList.toggle('rotate-45')
        }else{
            el.classList.toggle('-rotate-45')
        }
       
       
        })
        document.querySelector('.sidebar').classList.toggle('-translate-x-full')
        document.querySelector('.sidebar').classList.toggle('hidden')
    

})


</script>