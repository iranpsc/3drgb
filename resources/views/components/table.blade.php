<style>
   table{
      width: 100%; 
   }
   table, th, td {
  border:1px solid gray;
  padding: 10px;
}
/* tr:nth-child(even) {
  background-color: #EFEFEF;
} */
</style>
<div class="w-full rounded-[10px] ">
   
    <div class="w-full" style="overflow: auto;">
       <table >
          <thead>
             <tr >
                {{ $header }}
             </tr>
          </thead>
          <tbody>
            {{ $slot }}
          </tbody>
       </table>
    </div>
 </div>