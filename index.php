<html>
<head>
<title>shortwhitebaldguy.com - ExtJS Example</title>
<base href="http://localhost/extjsblog/"/>
<script type="text/javascript" src="scripts/ext-3.3.0/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="scripts/ext-3.3.0/ext-all-debug.js"></script>
<link rel="stylesheet" href="scripts/ext-3.3.0/resources/css/ext-all.css" type="text/css"/>

<script type="text/javascript">
Ext.onReady(function() {

var store = new Ext.data.JsonStore({
    root:'people',
    totalProperty:'total',
    fields:['id','first_name','last_name'],
    autoLoad:true,
    proxy: new Ext.data.HttpProxy({
        url:'stores/proxy.php'
    })
});

var cm = new Ext.grid.ColumnModel({
    columns:[{
        header:'id',
        dataIndex:'id',
        hidden:true
    },{
        header:'First Name',
        dataIndex:'first_name',
        resizeable:true,
        sortable:true
    },{
        header:'Last Name',
        dateIndex:'last_name',
        resizeable:true,
        sortable:false
    }]
});

var grid = new Ext.grid.EditorGridPanel({
    title:'My totally awesome test grid',
    cm:cm,
    store:store,
    layout:'fit',
    region:'center'
});


var viewPort = new Ext.Viewport({
    border:true,
    layout:'border',
    items:[grid],
});

});

</script>
</head>

<body></body>

</html>
