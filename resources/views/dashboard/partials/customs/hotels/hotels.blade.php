<section id="page-posts">

    <md-toolbar class="md-theme-indigo md-default-theme">
      <div class="md-toolbar-tools">
        <h2>
          <span>Recommendation Listing</span>
        </h2>
        <span flex></span>
        <md-button class="md-icon-button" aria-label="Add"
            ng-click="createShop($event)">
          <md-icon md-font-icon="icon-plus"></md-icon>
        </md-button>
      </div>
    </md-toolbar>

    <md-content layout-padding="16" class="transparent-content">

        <md-content layout-padding="16" class="box-shadow-content">
            <form name="userForm" layout-gt-xs1="row">
              

				<div layout-gt-xs="row" flex-gt-xs>
				  	<div class="md-toolbar-tools" flex-gt-xs>
                    	<span>Recommendation Listing</span>
                	</div>
					<md-input-container flex-gt-xs>
						<label>Search recommendations</label>
						<input ng-model="search.query" ng-model-options="{ updateOn: 'default blur', debounce: { 'default': 1500, 'blur': 0 } }">
					</md-input-container>
				</div>



				 <div layout-gt-xs="row" flex-gt-xs>
                    <md-input-container flex-gt-xs ng-if1="data.is_new">
                        <md-icon md-font-icon="icon-calendar" class="icon-contact" style="display:inline-block;"></md-icon>
                        <input mdc-datetime-picker date="true" time="false" type="text" id="time" short-time="true" placeholder="Set new shop until" ng-model="data.created_at_from" ng-change="dateChange('created_at_from')">
                    </md-input-container>

                    <md-input-container flex-gt-xs ng-if1="data.is_new">
                        <md-icon md-font-icon="icon-calendar" class="icon-contact" style="display:inline-block;"></md-icon>
                        <input mdc-datetime-picker date="true" time="false" type="text" id="time" short-time="true" placeholder="Set new shop until" ng-model="data.created_at_to" ng-change="dateChange('created_at_to')" >
                    </md-input-container>

                    {{-- <div class="md-toolbar-tools" flex-gt-xs>
                        <span flex="40">Status: </span>
                        <md-select ng-model="search.status" ng-model-options1="{trackBy: '$value.id'}" placeholder="Select Status" flex="60" ng-change="changeStatus()">
                            <md-option value="">Default</md-option>
                            <md-option value="webb">Has WebB</md-option>
                            <md-option value="non_webb">Hasn't WebB</md-option>
                        </md-select>
                    </div> --}}

                </div>
            </form>
        </md-content>




   		<md-list class="box-shadow-content" style="margin-top: 15px">
        	<table class="directory-listing table-grid">
        		<thead>
        			<tr>
        				<td class="col-head" style="width: 40%">
        					Name
        					{{-- <span class="sort"
                                ng-click="changeSort()"
                                ng-class="{'icon-sort-alpha-asc sorted': sort === 'asc',
                                    'icon-sort-alpha-desc sorted': sort === 'desc',
                                    'icon-text-height': sort === ''
                                }">
                            </span> --}}
        				</td>
        				<td class="col-head" colspan="2">Description</td>
        			</tr>
        		</thead>
        		<tbody>
                    <tr ng-if="!directories.length">
                        <td colspan="3" class="empty-cell">There is no listing yet! Please, add one or more from the left menu</td>
                    </tr>
        			<tr ng-repeat="directory in directories | startFrom: (pagination.current - 1) * pagination.limit | limitTo : pagination.limit ">
        				<td class="col-info" style="width: 390px;">
        					<div class="directory-image"
                                fstyle="background-image: url(/img/red-white.png); width: 100px; height: 100px;"
                                style="background-image: url('<% directory.weba ? directory.weba.thumbnail_url_link : '/img/red-white.png'; %>'); width: 130px; height: 130px;">
							</div>
        					<div class="directory-basic-info" style="padding-left: 150px;">
								<div class="name"> <a href="<% beautifyURL(directory.web_url) %>"><% beautifyURL(directory.web_url) %></a> </div>
        						<div class="name"><% directory.project_name %></div>
								<div class="name"><% directory.country_name %></div>
								<div class="name"><% directory.country_code %></div>
        						{{-- <div>
        							<span class="tag" >
        								<span class="icon-price-tag"></span>
                                        <% directory.web_url %>
        							</span>
        						</div> --}}
        						<ul class="mini-gallery-list">
        							<li class="gallery-item"
                                        href="<% mediaUrl + item.file_name %>"
        								ng-repeat="item in directory.photos | limitTo : 4"
        								style="background-image: url('<% mediaUrl + item.file_name %>')">
        						</ul>
        					</div>
        				</td>
        				<td class="col-info">
        					<div class="directory-desc-info">
        						<p class="desc" style="word-break: break-word;
                                    white-space: inherit;
                                    word-wrap: break-word;">
	        						<% directory.description %>
	        					</p>
	        					<ul class="contact-info">
	        						<li style="word-break: break-word;
                                        white-space: inherit;
                                        word-wrap: break-word;">
	        							<span class="icon">
	        								<span class="icon-location"></span>
	        							</span>
	        							<span class="text"><% directory.time_zone %></span>
	        						{{-- <li>
	        							<span class="icon">
	        								<span class="icon-mobile2"></span>
	        							</span>
	        							<span class="text"><% phoneArrayToString(directory.phones) %></span> --}}
	        						<li>
	        							<span class="icon">
	        								<span class="icon-envelop"></span>
	        							</span>
	        							<span class="text"><% directory.email %></span>
	        						<li>
	        							<span class="icon">
	        								<span class="icon-earth"></span>
	        							</span>
	        							<span class="text"><% directory.web_url %></span>

									<li>
	        							<span class="icon">
	        								<span class="icon-calendar"></span>
	        							</span>
	        							<span class="text"><% directory.created_at %></span>
	        					</ul>
        					</div>

        				</td>
        				<td class="col-info">
        					<div class="directory-static-map">
        						<img ng-src="<% getMapUrl(directory) %>">
        					</div>

        					<div class="edit-action"  ng-click="view(directory)">
        						<span class="icon-search"></span>
        					</div>
        				</td>
        			</tr>
        		</tbody>
        	</table>


	        {{-- <ul class="md-pagination">
	            <li ng-repeat="offset in pagination.total">
	                <md-button ng-click="changePage(offset)" ng-class="{'md-primary': offset - 1 == pagination.offset}"><% offset %></md-button>
	        </ul> --}}
    	</md-list>


        <md-content layout-padding="16" class="box-shadow-content" style="margin-top: 15px">

            <div class="text-center" layout="row" layout-align="center center" >
			   <cl-paging flex cl-pages="pagination.total" cl-steps="pagination.limit" cl-page-changed="onPageChanged()" cl-align="center center" cl-current-page="pagination.offset"></cl-paging>

                {{-- <cl-paging flex cl-pages="pagination.total_record" cl-steps1="pagination.limit" cl-page-changed="onPageChanged()" cl-align="center center" cl-current-page1="pagination.offset"></cl-paging> --}}

            </div>
        </md-content>

    </md-content>
</section>
