Analytics.reports.BaseChart=Garnish.Base.extend({$chart:null,$graph:null,type:null,chart:null,chartOptions:null,data:null,period:null,options:null,visualization:null,drawing:!1,init:function(t,i){this.visualization=new Analytics.Visualization({onAfterInit:$.proxy(function(){this.$chart=t,this.$chart.html(""),this.$graph=$('<div class="chart" />').appendTo(this.$chart),this.data=i,"undefined"!=typeof this.data.chartOptions&&(this.chartOptions=this.data.chartOptions),"undefined"!=typeof this.data.type&&(this.type=this.data.type),"undefined"!=typeof this.data.period&&(this.period=this.data.period),this.addListener(Garnish.$win,"resize","resize"),this.initChart(),this.draw(),"undefined"!=typeof this.data.onAfterInit&&this.data.onAfterInit()},this)})},addChartReadyListener:function(){google.visualization.events.addListener(this.chart,"ready",$.proxy(function(){this.drawing=!1,"undefined"!=typeof this.data.onAfterDraw&&this.data.onAfterDraw()},this))},initChart:function(){this.$graph.addClass(this.type)},draw:function(){this.drawing||(this.drawing=!0,this.dataTable&&this.chartOptions&&this.chart.draw(this.dataTable,this.chartOptions))},resize:function(){this.chart&&this.dataTable&&this.chartOptions&&this.draw(this.dataTable,this.chartOptions)}});