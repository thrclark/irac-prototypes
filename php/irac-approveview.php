<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>IRAC</title>
<link href="../less/styles.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.iu.edu/style.css?family=BentonSans:regular,bold|BentonSansCond:regular|GeorgiaPro:regular" media="screen" rel="stylesheet" type="text/css"/>
<style>
.tooltip-inner {
	text-align: left;
	padding: 10px;
	max-width: 300px;
}
</style>
<style type="text/css">
@-webkit-keyframes fadeIt {
 0% {
background-color: #FFFFFF;
}
 50% {
background-color: #ffffcc;
}
 100% {
background-color: #FFFFFF;
}
}
@-moz-keyframes fadeIt {
 0% {
background-color: #FFFFFF;
}
 50% {
background-color: #ffffcc;
}
 100% {
background-color: #FFFFFF;
}
}
@-o-keyframes fadeIt {
 0% {
background-color: #FFFFFF;
}
 50% {
background-color: #ffffcc;
}
 100% {
background-color: #FFFFFF;
}
}
@keyframes fadeIt {
 0% {
background-color: #FFFFFF;
}
 50% {
background-color: #ffffcc;
}
 100% {
background-color: #FFFFFF;
}
}
.backgroundAnimated {
	background-image: none !important;
	-webkit-animation: fadeIt 5s ease-in-out;
	-moz-animation: fadeIt 5s ease-in-out;
	-o-animation: fadeIt 5s ease-in-out;
	animation: fadeIt 5s ease-in-out;
}
</style>
</head>
<body id="top" class="view-admin">
<div class="wrapper">
    <?php include ('includes/brand-header.php') ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 style="margin-top:11px; color:#ffffff; font-size:32px">Infrastructure Resource Allocation Center</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="main-content container" role="main" style="padding-top:20px">
        <div id="main-content">
            <div class="row">
                <div class="col-md-3">
                    <nav>
                        <div class="nav-side-menu">
                            <div class="toggle-btn toggle-menu" data-toggle="collapse" data-target="#menu-content" style="">menu <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                            <div class="menu-list">
                                <ul id="menu-content" class="menu-content collapse out">
                                    <li><a href="asdf.php">Resource Pools</a> </li>
                                    <li><a href="asdf.php">Request New Pool</a> </li>
                                    <li><a href="asdf.php">View All Organizations</a> </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-9">
                    <div class="primary-content">
                        <section>
                            <div class="row section-head">
                                <div class="col-sm-12 section-header">
                                    <h2 class="h3">Resource Pool Request</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="well well-sm" style="background:#f8f8f8">
                                        <p class="lead">Routing Information</p>
                                        <div> <span class="small text-muted"> INITIATOR: </span>Hopf, Jeremy R (jhopf) </div>
                                        <div> <span class="small text-muted"> STATUS: </span><a href="https://apps-test.iu.edu/kr-stg/workflow/documents/52724869/log" target="_blank" class="workflow-status-link" title="Click here for detailed information on the status of this request">Enroute</a> </div>
                                        <table class="table table-condensed table-actions">
                                            <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th>Original Value</th>
                                                    <th>New Value</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Number of CPUs</td>
                                                    <td>6</td>
                                                    <td>8</td>
                                                    <td><a class="btn btn-xs btn-default" id="goto_cpu">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Memory</td>
                                                    <td>128GB</td>
                                                    <td>256GB</td>
                                                    <td><a class="btn btn-xs btn-default" id="goto_memory">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Sub-Account</td>
                                                    <td>2400</td>
                                                    <td>2600</td>
                                                    <td><a class="btn btn-xs btn-default" id="goto_subaccount">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <fieldset>
                                        <legend>General</legend>
                                        <div class="form-group ">
                                            <label class="control-label" for="pool_label"> Label</label>
                                            <span class="help-block small">A name for this Resource Pool, used as a label to uniquely identify it</span>
                                            <input name="pool_label" type="text" required="required" class="form-control" id="pool_label" placeholder="" value="IU Verify" readonly="readonly">
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="organization"> Organization </label>
                                            <span class="help-block small">The organization that owns the Resource Pool</span>
                                            <select disabled name="organization" aria-labelledby="organization-label" aria-describedby="organization-help" type="select" id="organization" class="form-control">
                                                <option value="">Select...</option>
                                                <option value="/organizations/d730dd24-c175-4d47-8acb-bcf703b40487" selected>One.IU Team</option>
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="datacenter"> Data Center </label>
                                            <span class="help-block small">The data center where the Resource Pool will reside</span>
                                            <select disabled name="dataCenter" aria-labelledby="dataCenter-label" aria-describedby="dataCenter-help" type="select" id="datacenter" class="form-control">
                                                <option value="">Select...</option>
                                                <option value="BL" selected>Bloomington</option>
                                                <option value="IN">Indianapolis</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Resources</legend>
                                        <div class="form-group " id="highlight_cpu">
                                            <label class="control-label" for="cpus"> Number of CPUs</label>
                                            <span class="help-block small">The highest number of CPUs that will be allocated across all VMs in the Resource Pool (min: 1, max: 100)</span>
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <input name="cpus" type="number" class="form-control" id="cpus" max="100" min="1" value="8" readonly="readonly" aria-describedby="cpus-help" aria-labelledby="cpus-label">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="storage"> Storage (in TB) </label>
                                            <span class="help-block small">The highest amount of storage space (in TB) that will be allocated across all VMs in the Resource Pool (min: 1TB)</span>
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <input name="storage" type="number" class="form-control" id="storage" min="0" step="any" value="16" readonly="readonly" aria-describedby="storage-help" aria-labelledby="storage-label">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group " id="highlight_memory">
                                            <label class="control-label" for="memory"> Memory (in GB) </label>
                                            <span class="help-block small">The highest amount of memory (in GB) that will be allocated across all VMs in the Resource Pool (min: 1GB, max: 256GB)</span>
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <input name="memory" type="number" class="form-control" id="memory" min="0" step="any" value="128" readonly="readonly" aria-describedby="memory-help" aria-labelledby="memory-label">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="vlan"> VLAN IDs</label>
                                            <span class="help-block small">A comma-separated list of VLAN IDs to which the Resource Pool can connect</span>
                                            <input name="cpvlanus" type="text" disabled="disabled" class="form-control" id="vlan" max="100" min="1" value="1253-ahjsdg" aria-describedby="cpus-help" aria-labelledby="vlan-label">
                                        </div>
                                        <div class="form-group">
                                            <label for="dataProtection" class="control-label">Data Protection</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="dataProtection" type="checkbox" id="dataProtection" value="true" checked="checked" disabled>
                                                    <!-- react-text: 278 -->Yes, backup all storage with CommVault. <!-- /react-text --><a href="https://kb.iu.edu/d/acvp" target="_blank" class="small">(more info)</a></label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Billing Details</legend>
                                        <div class="form-group ">
                                            <label class="control-label" for="account"> Account</label>
                                            <span class="help-block small">The account to which this Resource Pool will be billed</span>
                                            <input name="account" type="text" required="required" class="form-control" id="account" placeholder="" value="ABC-DEFG" readonly="readonly">
                                        </div>
                                        <div class="form-group " id="highlight_subaccount">
                                            <label class="control-label" for="subaccount"> Sub-Account</label>
                                            <span class="help-block small">(Optional) The sub-account to which this Resource Pool will be billed</span>
                                            <input name="subaccount" type="text" required="required" class="form-control" id="subaccount" placeholder="" value="2600" readonly="readonly">
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-sm-4" id="summary_column">
                                    <div class="well well-sm" id="summary">
                                        <table class="table table-condensed small">
                                            <caption>
                                            Summary
                                            </caption>
                                            <thead class="sr-only">
                                                <tr>
                                                    <th class="text-left" scope="col">Item</th>
                                                    <th class="text-right" scope="col">Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">CPU</th>
                                                    <td class="text-right"><span class="cpuTotal">$0.00</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Memory</th>
                                                    <td class="text-right"><span class="memoryTotal">$0.00</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Storage</th>
                                                    <td class="text-right"><span class="storageTotal">$0.00</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Data Protection</th>
                                                    <td class="text-right"><span class="dataProtectionTotal">$0.00</span></td>
                                                </tr>
                                                <tr class="active">
                                                    <th scope="row" class="text-weight-bold">Total</th>
                                                    <td class="text-right"><span class="grandTotal">$0.00</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="pull-right small"><a href="#"  data-toggle="tooltip" data-placement="bottom" title="The pricing produced by this calculator is provided as a planning aid and is an estimate based on the information you enter. Actual charges may vary from these estimates to reflect your final configuration and monthly data volumes.">Disclaimer</a></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <div class="text-right"> <a href="" class="btn btn-default" data-toggle="modal" data-target="#confirm_exit">Cancel</a> <a href="" class="btn btn-primary" data-toggle="modal" data-target="#confirm_save">Save</a> </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/brand-footer.php') ?>
</div>
<script type="text/javascript" src="../js/jquery.js"></script> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script> 
<script type="text/javascript" src="../js/jquery.sticky.js"></script> 
<script>
    $(window).load(function() {
        $("#summary").sticky({
            topSpacing: 20
        });
    });
    $(function() {
        $('[data-toggle="popover"]').popover()
    })
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script> 
<script type="text/javascript">
    $(function() {
        $("#goto_cpu").click(function() {
            $('#highlight_cpu').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#highlight_cpu").offset().top
            }, 1000);
            $('#highlight_cpu').addClass('backgroundAnimated');
        });
        $("#goto_memory").click(function() {
            $('#highlight_memory').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#highlight_memory").offset().top
            }, 1000);
            $('#highlight_memory').addClass('backgroundAnimated');
        });
        $("#goto_subaccount").click(function() {
            $('#highlight_subaccount').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#highlight_subaccount").offset().top
            }, 1000);
            $('#highlight_subaccount').addClass('backgroundAnimated');
        });
    });
</script>
</body>
</html>