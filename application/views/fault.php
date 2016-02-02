<div class="fault">
    <div class="customer">
        <?php echo html_escape($customer->customer_telephone_number); ?>
        <?php echo html_escape($customer->customer_name); ?>
        <?php echo html_escape($customer->customer_address); ?>        
    </div>
    <div class="fault_details">
        <?php echo html_escape($fault->faulty_telephone_number); ?>
        <?php echo html_escape($fault->fault_desc); ?>
        <?php echo html_escape($fault->fault_date); ?>
        <?php echo html_escape($fault->fault_remarks); ?>
    </div>
</div>
