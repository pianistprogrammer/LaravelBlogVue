<template>
    <div>
      <div class="baloo-primary">
	<div class="main-contaier">
		<div class="container">

			<div class="row wrapper-main-content">
				<div class="has-sidebar col-md-12 col-lg-8">
					<div class="main-left main-content">
						<div id="home_feature_posts_widget-2" class="widget home_feature_posts_widget">
							<h4 class="widget-title">Posts</h4>
							<div class="baloo-feature-cat list">
								<div class="baloo-blog blog-list">
									<div v-for="post in allposts" :key="post.id" class="post-37 post type-post status-publish format-standard has-post-thumbnail hentry category-food-drink category-lifestyle">

										<div class="post-inner">
											<div class="post-format">
												<a href="21-crazy-fast-dessert-recipes-that-crush-sugar/index.html"
													style="background-image: url('wp-content/uploads/2019/05/iryna-ogarkova-447661-unsplash.jpg');"></a>
											</div>
											<div class="post-info">
												<div class="post-cats">
													<a href="category/food-drink/index.html"
														rel="category tag">{{post.category.name}}</a>
												</div>
												<h3 class="post-title"><a
														href="21-crazy-fast-dessert-recipes-that-crush-sugar/index.html"
														rel="bookmark">{{post.title}}
														</a></h3>
												<div class="post-meta">
													<div class="ath-post">
														<span>by</span> {{post.user.name}} </div>
													<div class="date-post">
														<span class="post-date">{{post.created_at | timeformat}}</span>
													</div>
													<div class="comment-number">
														No Comments </div>
												</div>
												<div class="post-excerpt">
													<p>{{post.description}}</p>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>

				</div>
				<sidebar></sidebar>
			</div>
		</div>
	</div>
</div>
    </div>
</template>
<script>
import sidebar from "../public/blog/BlogSidebar.vue";
export default {
    name:"PublicHome",
    components:{
      sidebar
    },
	computed:{
		allposts(){
			return this.$store.getters.getblogPost
		}
	},
	mounted(){
		this.$store.dispatch("getblogPost")
	}
}
</script>
