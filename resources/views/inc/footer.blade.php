

<div id="mymovieapp">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:800px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <input type="text" v-model="searchKey">
  <button  v-on:click="searchMovies">search</button>
        </div>
        <div class="modal-body">
         <h2>Result</h2>
  
    <p v-for="item in movieList.Search" style="display: inline;">
      <movie-detail v-bind:movie="item"></movie-detail>
      
    </p >
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div></div>
      
    </div>
  </div>

<!--footer-->
<div style="
  width: 1200px;
 
  padding: 50px;
  margin: 20px; "><h5 style="font-weight: bold; text-indent:440px;">MOVIES&STUFF</h5>
  <p style="text-indent:380px;">@ Movies&Stuff All Rights Reserved</p>
<p style=" position: absolute; left:470px; ">Terms & Service </p>
<p style=" position: absolute; right: 600px; ">Privacy policy </p>
</div><!-- footer  -->

<script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>
