<?php require_once('inc/config.php'); ?>
<?php require_once('header.php'); ?>
  
<div class="container">
    <form class = "post-list">
        <input type = "hidden" value = "" />
    </form>
    
    <article class="navbar-form navbar-left ml-b">
        <div class="form-group">
            <label>Per Page: </label>
            <select class="form-control post_max">
                <option value="40">40</option>
                <option value="80">80</option>
                <option value="160">160</option>
            </select>
            <label>Search Keyword: </label>
            <input type="text" class="form-control post_search_text" placeholder="Enter a keyword">
        </div>
        <input type = "submit" value = "Filter" class = "btn btn-primary post_search_submit" />
    </article>
    
    <br class = "clear" />
    
    <div class = "wave-box-wrapper">
        <div class = "wave-box"></div>
        <table class = "table table-striped table-post-list no-margin">
            <thead>
                <tr>
                    <th id = "name" class = "active"><a href = "#">Name</a></th>
                    <th id = "price"><a href = "#">Price</a></th>
                    <th id = "status"><a href = "#">Status</a></th>
                    <th id = "date"><a href = "#">Date</a></th>
                    <th id = "quantity"><a href = "#">Quantity</a></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class = "pagination-container"></tbody>
        </table>
        
        <div class = "pagination-nav"></div>
    </div>
</div>

<?php require_once('footer.php'); ?>