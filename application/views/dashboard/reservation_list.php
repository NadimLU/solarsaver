<div class="container">
<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th>Reservation ID</th>
      <th>Customer Name</th>
      <th>Street Address</th>
      <th>Reservation Date</th>
	  
      <th>View Invoice</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>
  <?php foreach($reservationlist as $reslist): ?>
    <tr>
      <th scope="row"><?php echo $reslist->reservation_id; ?></th>
      <td><?php echo $reslist->first_name." ".$reslist->last_name; ?></td>
	  <td><?php echo $reslist->street_address; ?></td>
      <td><?php echo date(" d F, Y, h:i A", strtotime($reslist->reservation_date)); ?></td>
	  
      <td><button class="btn btn-success" onclick="location.href='<?php echo site_url('Dashboard/SingleReservationDetails/'.$reslist->reservation_id.'/'.$reslist->profile_id)?>'">Click To View</button></td>
    </tr>
  <?php endforeach;?>  
  </tbody>
</table>

<script>
$(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
		  });
});
</script>
</div>