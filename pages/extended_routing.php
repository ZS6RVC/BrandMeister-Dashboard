    <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.php">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li><a href="#">Extened routign</a></li>
            </ul>

<div class="row-fluid">
<!-- Things here -->
      <div class="page-header">
        <h1>Extended Routing for DV4mini</h1>
      </div>
<div id="alert-area"></div>
      <form action="javascript:link()" class="form-horizontal" style="padding: 16px;">
        <div class="form-group">
          <label for="number">User ID</label>
          <select name="number" id="dongle-list"><option>Choose dongle</option> </select>
        </div>
        <div class="form-group">
          <label for="group">Mapped group</label>
          <input id="group" type="text" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">OK</button>
        </div>
      </form>
</div>
    </div><!--/.fluid-container-->
    <script src="js/bm_common.js"></script>
    <script src="js/extended_routing.js"></script>
