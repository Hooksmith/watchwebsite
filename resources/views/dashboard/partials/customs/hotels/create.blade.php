<div>
	<!-- START: HEADER TOOLBAR -->
	<md-toolbar class="md-theme-indigo md-default-theme">
      <div class="md-toolbar-tools">
        <h2>
	        <span>
			    Create/Edit Recommendation Information
			</span>

        </h2>
        <span flex></span>
      </div>
    </md-toolbar>

    <md-content layout-padding="16" class="transparent-content">
		<md-content class="box-shadow-content">
			<form layout="row" layout-padding="16"  name="dialogFormType" layout-align="center center"
				ng-submit="submit()" ng-disabled="loading">
				<md-content style="width: 100%; max-width: 960px;"
					class="transparent-content enterprise-create">
					<div class="" layout-gt-xs="row">

				      	<div flex-gt-xs>
				      		<div layout-gt-xs="column">
					      		<md-input-container flex-gt-xs>
						          	<label>Project Name</label>
						          	<input ng-model="data.project_name" name="project_name" required ng-disabled="loading">
						          	<div ng-messages="siteForm.project_name.$error"
						          		 ng-show="siteForm.project_name.$dirty &&
						          		 	siteForm.project_name.$invalid">
							          	<div ng-message="required">Project name is needed</div>
							        </div>
						        </md-input-container>

					      		
							    <md-input-container  flex-gt-xs>
							      	<!-- Use floating placeholder instead of label -->
							      	<md-icon md-font-icon="icon-envelop" class="email icon-contact"></md-icon>
							      	<input ng-model="data.email" ng-disabled="loading"
							      		type="email" placeholder="Email" name="email"
							      		fake-ng-required="true">
							    </md-input-container>
							    <md-input-container  flex-gt-xs>
							      	<md-icon md-font-icon="icon-earth" class="icon-contact" style="display:inline-block;"></md-icon>
							      	<input ng-model="data.web_url" ng-disabled="loading" type="text" placeholder="Website"  name="web_url">
							    </md-input-container>
							    <md-input-container  flex-gt-xs>
							      	<md-icon md-font-icon="icon-calendar" class="icon-contact" style="display:inline-block;"></md-icon>
							      	<input ng-model="data.created_at" ng-disabled="loading" type="text" placeholder="Date&Time (required)" name="address"
							      	ng-required="true">
							    </md-input-container>
							   

						    </div>
				      	</div>

				      	<div flex-gt-xs>
					       
							<div layout-gt-xs="row" layout-padding-row="16">
								 <md-input-container  flex-gt-xs>
									 <input ng-model="data.latitude" ng-change="onLatLngChanged()"
									 	ng-disabled="loading" type="text" placeholder="Latitude"  name="lat">
								 </md-input-container>
								 <md-input-container  flex-gt-xs>
									 <input ng-model="data.longitude" ng-change="onLatLngChanged()"
									 	ng-disabled="loading" type="text" placeholder="Longitude"  name="long">
								 </md-input-container>
							</div>
			      			{{-- <div layout="column" layout-padding-row="16">
			      			 	
			      				<input id="pac-input" ng-show="showMapSearchBox"
			      					class="controls-search-map" type="text" placeholder="Search Box">

			      				<ui-gmap-google-map center='map.center'
			      					events="map.events"
		      						control="map.control"
			      					zoom='map.zoom'>
			      					<ui-gmap-marker coords="marker.coords"
			      						options="marker.options"
			      						events="marker.events"
			      						idkey="marker.id">
		        					</ui-gmap-marker>
			      				</ui-gmap-google-map>
			      			</div> --}}
				      	</div>
			      	</div>

			      	<div layout-gt-xs="column" style="margin-top: 15px;">
			      		<md-tabs md-dynamic-height md-border-bottom>
			      			{{-- Detail Description --}}
					      	<md-tab label="detail">
					        	<md-content class="md-padding">
					          		<div layout-gt-xs="column">
										

									    <md-input-container flex-gt-xs>
			            	                <label>Country</label>
			            	                <input ng-model="data.country_name" name="country_name" type="text">
			            		          	
			            	            </md-input-container>

			            	             <md-input-container flex-gt-xs>
			            	                <label>Country Code</label>
			            	                <input ng-model="data.country_code" name="price" type="text" ng-required="true">
			            		          	<div ng-messages="dialogFormType.country_code.$error"
			            		          		 ng-show="dialogFormType.country_code.$dirty && dialogFormType.country_code.$invalid">
			            			          	<div ng-message="invalid">Country code number is not valid</div>
			            			        </div>
			            	            </md-input-container>

			            	            <md-input-container flex-gt-xs>
			            	                <label>Time Zone</label>
			            	                <input ng-model="data.time_zone" name="time_zone" type="text">
			            		          	<div ng-messages="dialogFormType.time_zone.$error"
			            		          		 ng-show="dialogFormType.time_zone.$dirty && dialogFormType.time_zone.$invalid">
			            			          	<div ng-message="invalid">Time zone is not valid</div>
			            			        </div>
			            	            </md-input-container>
								      	
							      	</div>
					        	</md-content>
					      	</md-tab>

				      		<md-tab label="gallery" ng-if="mode=='edit'">
				        		<md-content class="md-padding">
				        			<h1 class="md-display-2">Hooksmith </h1>

							      	<section layout="row" layout-sm="column"
							      		class="media-gallery"
							      		style="margin-top: 15px; margin-bottom: 15px;">
							      		<div class="media" flex="33">
							      			<div class="logo-inner" layout="column" layout-align="center center"
											  style="background-image: url('<% data.webb.thumbnail_url_link %>')">
								         		<span class="icon-camera"></span>
								         		<span class="upload-text">Upload your Hooksmith's photo here</span>
								         		{{-- <span class="upload-text" ng-show="mode === 'create'">Please, save your listing first before upload</span> --}}
								         		<div class="overlay" ng-show="mode === 'edit'"></div>
								         	</div>
								         	<span class="icon-upload3 center"
								         		ngf-select ng-model="files" ngf-change="uploadMedia(files)"
								         		multiple="false">
								         	</span>
							      		</div>
							      		{{-- Media --}}
							      		<div class="media uploaded" flex="33" ng-repeat="media in data.gallery">
							      			<div class="logo-inner" layout="column" layout-align="center center"
							      				style="background-image: url('<% media.thumbnail_url_link %>')">
								         		<div class="overlay"></div>
								         		<div class="remove icon-cross" ng-click="deletePhoto(media)"></div>
								         	</div>
								         	<span class="icon-search left" href="<% mediaUrl ? mediaUrl + media.file_name : '/' + media.file_name %>" data-title="<% data.name %>"></span>
								         	<span class="icon-heart right" ng-class="{'selected': data.cover_media == media._id}" href="javascript:void(0)" ng-click="updateCover(media, $event)" data-title="<% data.name %>"></span>
							      		</div>
							      		{{-- Pending --}}
							      		<div class="media" flex="33" ng-repeat="media in pendingFiles">
							      			<div class="logo-inner" layout="column" layout-align="center center"
							      				style="background-image: url('<% media.src %>')">
								         		<div class="overlay" ng-show="mode === 'edit'"></div>
								         		<md-progress-circular md-mode="determinate"
								         			ng-show="media.loading"
								         			value="<% media.progress %>"></md-progress-circular>
								         		<div ng-show="!media.loading" class="remove icon-cross" ng-click="deletePendingPhoto(media)"></div>
								         	</div>
							      		</div>
							      	</section>
				        		</md-content>
				      		</md-tab>


					      	

			      		
				 
				    	</md-tabs>


						
			      	</div>


			
			    </md-content>
		    </form>
	    </md-content>
    </md-content>
</div>
