Analytics.AccountExplorer=Garnish.Base.extend({data:null,$accountSelect:null,$propertySelect:null,$viewSelect:null,init:function(t,e){this.setSettings(e,Analytics.AccountExplorer.defaults),this.$container=$(t),this.$refreshViewsBtn=$(".refresh-views",this.$container),this.$spinner=$(".spinner",this.$container),this.$accountSelect=$(".account > select",this.$container),this.$propertySelect=$(".property > select",this.$container),this.$viewSelect=$(".view > select",this.$container),this.addListener(this.$refreshViewsBtn,"click","refreshViews"),this.addListener(this.$accountSelect,"change","onAccountChange"),this.addListener(this.$propertySelect,"change","onPropertyChange"),this.parseAccountExplorerData(this.settings.data),this.settings.forceRefresh&&this.refreshViews()},refreshViews:function(){this.$spinner.removeClass("hidden"),this.$refreshViewsBtn.addClass("disabled"),Craft.postActionRequest("analytics/settings/getAccountExplorerData",{},$.proxy(function(t,e){"success"==e?(t.error?alert(t.error):this.parseAccountExplorerData(t),this.$spinner.addClass("hidden"),this.$refreshViewsBtn.removeClass("disabled")):alert("Couldn’t load account explorer data.")},this))},parseAccountExplorerData:function(t){this.data=t;var e=this.$accountSelect.val(),i=this.$propertySelect.val(),s=this.$viewSelect.val();this.updateAccountOptions(),this.updatePropertyOptions(),this.updateViewOptions(),e&&(this.$accountSelect.val(e),this.$accountSelect.trigger("change")),i&&(this.$propertySelect.val(i),this.$propertySelect.trigger("change")),s&&(this.$viewSelect.val(s),this.$viewSelect.trigger("change"))},onAccountChange:function(){this.updatePropertyOptions(),this.updateViewOptions()},onPropertyChange:function(){this.updateViewOptions()},updateAccountOptions:function(){$("option",this.$accountSelect).remove(),$.each(this.data.accounts,$.proxy(function(t,e){var i=$("<option />").appendTo(this.$accountSelect);i.attr("value",e.id),i.text(e.name)},this))},updatePropertyOptions:function(){$("option",this.$propertySelect).remove(),$.each(this.data.properties,$.proxy(function(t,e){if(e.accountId==this.$accountSelect.val()){var i=$("<option />").appendTo(this.$propertySelect);i.attr("value",e.id),i.text(e.name)}},this))},updateViewOptions:function(){$("option",this.$viewSelect).remove(),$.each(this.data.views,$.proxy(function(t,e){if(e.webPropertyId==this.$propertySelect.val()){var i=$("<option />").appendTo(this.$viewSelect);i.attr("value",e.id),i.text(e.name)}},this))}},{defaults:{}});