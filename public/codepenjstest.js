@accent-color: #61C7B3;

@color-light-grey: #EFEFEF;
@color-dark-grey: #888;
@color-red: #D23B3D;
@color-orange: #E2A917;
@color-blue: #1BC3E1;
@color-green: #9AE14F;

@sidebar-background: #1D2127;
@sidebar-text-color: #ABB4BE;
@sidebar-dark-text-color: #465162;

@sidebar-width: 300px;
@sidebar-padding: 50px;


* {
	box-sizing: border-box;
}

body {
	background: #FFF;
	font-family: Roboto, sans-serif;
	font-weight: 400;
	line-height: 1.5em;
	color: #888;
}

h1 {
	font-size: 50px;
	line-height: 40px;
	font-weight: 100;
}

p {
	margin-bottom: 1em;
}

a {
	color: @accent-color;
	text-decoration: none;
	transition-duration: .3s;

	&:hover {
		color: darken(@accent-color, 20%);
		transition-duration: .05s;
		text-decoration: none;
	}
}


.circle-icon {
	width: 30px;
	height: 30px;
	text-align: center;
	line-height: 28px;
	border: 2px solid #B4BBC1;
	border-radius: 100px;
	font-size: 14px;
	color: #B4BBC1;
	cursor: pointer;
	display: block;
	float: left;

	&.small {
		height: 25px;
		width: 25px;
		line-height: 23px;
		font-size: 11px;
	}

	&:hover {
		color: #57636C;
		border-color: #57636C;
	}

	&.red {
		color: @color-red;
		border-color: @color-red;

		&:hover {
			color: #791C1E;
			border-color: #791C1E;
		}
	}
}


.checkbox-wrapper {
	cursor: pointer;
	height: 20px;
	width: 20px;
	position: relative;
	display: inline-block;
	box-shadow: inset 0 0 0 1px #A3ADB2;
	border-radius: 1px;

	input {
		opacity: 0;
		cursor: pointer;

		&:checked ~ label {
			opacity: 1;
		}
	}

	label {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		cursor: pointer;
		background: #A3ADB2;
		opacity: 0;
		transition-duration: .05s;

		&:hover {
			background: darken(#A3ADB2, 5%);
			opacity: .5;
		}
		&:active {
			background: darken(#A3ADB2, 10%);
		}
	}
}





#sidebar {
	position: fixed;
	top: 0;
	left: 0;
	height: 100%;
	width: @sidebar-width;
	background: @sidebar-background;
	transition-duration: .3s;
	z-index: 5;

	&, & a {
		color: @sidebar-text-color;
	}

	.logo-container {
		font-weight: 100;
		font-size: 50px;
		line-height: 40px;
		text-align: center;
		margin: 50px 0;
		cursor: pointer;

		.logo {
			position: relative;
			top: -6px;
			font-size: 25px;
			margin-right: 15px;
			padding: 10px;
			border: 2px solid @accent-color;
			border-radius: 100px;
			text-indent: 1px;
			color: @accent-color;
		}
	}

	.compose-button {
		border-radius: 100px;
		padding: 13px 20px;
		text-align: center;
		font-weight: 500;
		text-transform: uppercase;
		color: @accent-color;
		border: 2px solid @accent-color;
		display: block;
		margin: 0 @sidebar-padding 30px @sidebar-padding;
		cursor: pointer;

		&:hover {
			color: @sidebar-text-color;
			border-color: @sidebar-text-color;
		}
	}

	.menu-segment {
		padding: 0 @sidebar-padding 0 (@sidebar-padding+20px);

		ul, li {
			margin: 0;
			padding: 0;
		}

		.ball {
			&.pink {
				border-color: #EA4C89;
			}
			&.green {
				border-color: #9AE14F;
			}
			&.blue {
				border-color: #1BC3E1;
			}
		}


		li {

			&.title {
				text-transform: uppercase;
				font-weight: 600;
				padding: 10px 0;
				color: @sidebar-dark-text-color;

				.icon {
					float: right;
				}
			}

			&.active a, &.active a:hover {
				background: lighten(@sidebar-background, 5%);//#272B31;
			}

			a {
				display: block;
				margin: 0 -@sidebar-padding 0 (-@sidebar-padding - 20px);
				padding: 10px @sidebar-padding 10px (@sidebar-padding + 20px);

				&:hover {
					background: lighten(@sidebar-background, 2%);
				}
			}

			.italic-link {
				margin-left: -30px;

				&, &:hover {
					background: transparent;
				}
				font-style: italic;
				color: @sidebar-dark-text-color;

				&:hover {
					color: @sidebar-text-color;
				}
			}
		}


		// Different part styling
		.labels, .chat {
			li a span {
				display: block;
				border: 5px solid red;
				border-radius: 100px;
				margin-top: 6px;
			}

			&.labels li a span {
				float: right;
			}
			&.chat li a span {
				float: left;
				margin-right: 10px;
			}
		}
		.chat li a {
			padding-left: @sidebar-padding;
		}
	}

	.separator {
		margin: 30px 35px;
		height: 1px;
		background: #2D3138;
	}

	.bottom-padding {
		height: 100px;
	}



	& > .nano-pane {
		background: transparent;

		.nano-slider {
			background: rgba(255,255,255,.1);
		}
	}
}


#main {
	position: fixed;
	top: 0;
	left: @sidebar-width;
	bottom: 0;
	right: 0;
	z-index: 4;
	transition-duration: .3s;
	padding-left: 4px;
	box-shadow: inset 4px 0 0 @color-light-grey, inset 5px 0 0 darken(@color-light-grey, 5%);

	.overlay {
		position: absolute;
		top: 0;
		left: -10px; // To compensate for slide-in animation white leaking
		right: 0;
		bottom: 100%;
		background: rgba(0,0,0,.4);
		z-index: 5;
		opacity: 0;
		transition-duration: 0s;
		transition-property: opacity;
		//transition-delay: .5s;

		.show-main-overlay & {
			opacity: 1;
			bottom: 0;
			transition-duration: .5s;
		}
	}

	.header {
		padding: 50px 60px;
		border-bottom: 1px solid @color-light-grey;
		overflow: hidden;

		.page-title {
			display: block;

			.sidebar-toggle-btn {
				width: 0;
				margin-top: 1px;
				padding: 11px 0 0 0;
				float: left;
				position: relative;
				display: block;
				cursor: pointer;
				transition-duration: .3s;
				transition-delay: .5s;
				opacity: 0;
				margin-right: 0;

				.show-sidebar & {
					transition-delay: 0s;
				}

				.line {
					height: 3px;
					display: block;
					background: @color-dark-grey;
					margin-bottom: 4px;
					transition-duration: .5s;
					transition-delay: .5s;
				}


				.show-sidebar & .line-angle1 {
					transform: rotate(-120deg);
				}
				.show-sidebar & .line-angle2 {
					transform: rotate(120deg);
				}
				.line-angle1 {
					width: 8px;
					margin: 0;
					position: absolute;
					top: 15px;
					left: -11px;
					transform: rotate(-60deg);
				}

				.line-angle2 {
					width: 8px;
					margin: 0;
					position: absolute;
					top: 21px;
					left: -11px;
					transform: rotate(60deg);
				}
			}

			.icon {
				font-size: 15px;
				margin-left: 20px;
				position: relative;
				top: -5px;
				cursor: pointer;
			}
		}

		.search-box {
			float: right;
			width: 150px;
			height: 40px;
			position: relative;


			input, .icon {
				transition-duration: .3s;
			}

			input {
				position: absolute;
				top: 0;
				right: 0;
				bottom: 0;
				width: 100%;
				border: 0;
				padding: 0;
				margin: 0;
				text-indent: 15px;
				height: 40px;
				z-index: 2;
				outline: none;
				color: #999;
				background: transparent;
				border: 2px solid @color-light-grey;
				border-radius: 5px;
				transition-timing-function: cubic-bezier(.3, 1.5, .6, 1);

				&:focus {
					color: #333;
					border-color: darken(@color-light-grey, 10%);
					width: 150%;

					& ~ .icon {
						opacity: 1;
						z-index: 3;
						color: @accent-color;
					}
				}
			}

			.icon {
				position: absolute;
				top: 0;
				right: 0;
				bottom: 0;
				width: 40px;
				text-align: center;
				line-height: 40px;
				z-index: 1;
				cursor: pointer;
				opacity: .5;
			}
		}
	}


	.action-bar {
		padding: 20px 60px;
		border-bottom: 1px solid @color-light-grey;
		overflow: hidden;

		li {
			float: left;
			margin-right: 10px;
		}
	}

	
	// Ugly hack because i can't get the damn thing to work!
	#main-nano-wrapper {
		position: absolute;
		top: 214px;
		bottom: 0;
		height: auto;
	}

	.message-list {
		display: block;

		li {
			position: relative;
			display: block;
			height: 50px;
			line-height: 50px;
			cursor: default;
			transition-duration: .3s;
			
			&:hover, &.active, &.selected {
				background: @color-light-grey;
				transition-duration: .05s;
			}

			&.active, &.active:hover {
				box-shadow: inset 5px 0 0 @accent-color;
			}

			&.unread {
				font-weight: 600;
        color: #555;
			}

			.col {
				float: left;
				position: relative;
			}

			&.blue-dot .col-1 .dot {
				border-color: @color-blue;
			}
			&.orange-dot .col-1 .dot {
				border-color: @color-orange;
			}
			&.green-dot .col-1 .dot {
				border-color: @color-green;
			}
			
			.col-1 {
				width: 400px;

				.star-toggle, .checkbox-wrapper, .dot {
					display: block;
					float: left;
				}

				.dot {
					border: 4px solid transparent;
					border-radius: 100px;
					margin: 22px 26px 0;
					height: 0;
					width: 0;
					line-height: 0;
					font-size: 0;
				}

				.checkbox-wrapper {
					margin-top: 15px;
					margin-right: 10px;
				}
				
				.star-toggle {
					margin-top: 15px;
				}

				.title {
					position: absolute;
					top: 0;
					left: 140px;
					right: 0;

					text-overflow: ellipsis;
					overflow: hidden;
					white-space: nowrap;
				}
			}
			.col-2 {
				position: absolute;
				top: 0;
				left: 400px;
				right: 0;
				bottom: 0;

				.subject, .date {
					position: absolute;
					top: 0;
				}

				.subject {
					left: 0;
					right: 200px;
					text-overflow: ellipsis;
					overflow: hidden;
					white-space: nowrap;
				}

				.date {
					right: 0;
					width: 200px;
					padding-left: 80px;
				}
			}
			
			/*
			.col-1 {
				width: 140px;
				text-align: right;
				padding-right: 37px;
				padding-top: 15px;

				.checkbox-wrapper, .icon, .dot {
					float: right;
					display: block;
				}

				.icon {
					margin-left: 10px;
					font-size: 20px;
				}

				.dot {
					border: 5px solid transparent;
					border-radius: 100px;
					margin-right: 24px;
					margin-top: 5px;
				}
			}
			.col-2 {
				width: 270px;
			}
			.col-3 {
				position: absolute;
				top: 0;
				left: 390px; // Covers previous cols
				right: 120px;

				.grey {
					opacity: .7;
				}
			}
			.col-4 {
				width: 120px;
				padding-left: 20px;
				float: right;
			}
			*/
		}
	}

	.load-more-link {
		display: block;
		text-align: center;
		margin: 30px 0 100px 0;
	}
}



#message {
	position: fixed;
	top: 0;
	left: 60%;
	bottom: 0;
	width: 40%;
	z-index: 5;
	transform: translateX(200%);
	transition-duration: .5s;
	padding: 50px 30px;
	background: @color-light-grey;

	.show-message & {
		transition-duration: .3s;
	}

	.header {
		margin-bottom: 30px;
		padding: 0;

		.page-title {
			display: block;
			float: none;
			margin-bottom: 20px;

			.icon {
				margin-top: 4px;
				margin-right: 10px;
			}
		}

		.grey {
			margin-left: 10px;
			color: #999;
		}
	}
	

	// Ugly hack because i (again) can't get nanoscroll to work correctly
	#message-nano-wrapper {
		position: absolute;
		top: 165px;
		bottom: 0;
		height: auto;
		left: 0;
		right: 0;
		width: auto;
	}

	.message-container {
		padding: 0 30px;

		li {
			padding: 25px;
			border: 1px solid rgba(0,0,0,.15);
			background: #FFF;
			margin: 0 0 30px 0;
			position: relative;

			&:hover .details .left {

				.arrow {
					background: @accent-color;
					border: 0px solid @accent-color;

					&.orange {
						background: @color-orange;
						border: 0px solid @color-orange;
					}
				}
			}

			.details {
				padding-bottom: 20px;
				border-bottom: 1px solid rgba(0,0,0,.1);
				margin-bottom: 30px;
				overflow: hidden;

				.left {
					float: left;
					font-weight: 600;
					color: @color-dark-grey;
					transition-duration: .3s;

					.arrow {
						display: inline-block;
						position: relative;
						height: 2px;
						width: 20px;
						background: rgba(0,0,0,.15);
						vertical-align: top;
						margin-top: 12px;
						margin: 12px 20px 0 15px;
						border: 0px solid rgba(0,0,0,.15);
						transition-duration: .3s;

						&:after {
							position: absolute;
							top: -4px;
							left: 100%;
							height: 0;
							width: 0;
							border: inherit;
							border-width: 7px;
							border-style: solid;
							content: '';
							border-right: 0;
							border-top-color: transparent;
							border-bottom-color: transparent;
							border-top-width: 5px;
							border-bottom-width: 5px;
						}
					}
				}

				.right {
					float: right;
					color: #999;
				}
			}


			.message {
				margin-bottom: 40px;

				p:last-child {
					margin-bottom: 0;
				}
			}

			&:hover .tool-box {
				.red-hover {
					color: @color-red;
					border-color: @color-red;

					&:hover {
						color: #791C1E;
						border-color: #791C1E;
					}
				}
			}

			.tool-box {
				position: absolute;
				bottom: 0;
				right: 0;
				border: 0px solid #DDDFE1;
				border-top-width: 1px;
				border-left-width: 1px;
				padding: 8px 10px;
				transition-duration: .3s;

				a {
					margin-right: 10px;

					&:last-child {
						margin-right: 0;
					}
				}
			}
		}
	}
}


.show-message #message {
	transform: none;
}
.show-message #main {
	margin-right: 40%;
}







@media only screen and (min-width: 1499px) {
	
	#main .overlay {
		display: none;
	}

}

@media only screen and (max-width: 1500px) {
	
	.show-message {
		#main {
			margin-right: 0;
		}
		#message {
			left: 50%;
			width: 50%;
		}
	}

}

@media only screen and (max-width: 1024px) {

	#sidebar {
		transform: translateX(-100%);
	}

	#main {
		left: 0;
		box-shadow: none;

		.header .page-title .sidebar-toggle-btn {
			margin-right: 20px;
			opacity: 1;
			width: 20px;
		}
	}



	.show-sidebar {
		#sidebar {
			transform: none;
		}
		
		#main {
			transform: translateX(@sidebar-width);
		}
	}



	
	.show-message {
		#main {
			margin-right: 0;
		}
		#message {
			left: 20%;
			width: 80%;
		}
	}

}


@media only screen and (max-width: 600px) {
	#main .header {
		.search-box {
			float: none;
			width: 100%;
			margin-bottom: -110px;
			margin-top: 70px;

			input, input:focus {
				width: 100%;
			}
		}

		.page-title {
			margin-bottom: 50px;
		}
	}

	#main #main-nano-wrapper {
		position: absolute;
		top: 260px;
		bottom: 0;
		height: auto;
	}


	#main .message-list li {
		.col-1 {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 120px;
			width: auto;
		}
		.col-2 {
			right: 0;
			left: auto;
			width: 120px;

			.date {
				padding-left: 0;
				position: static;
			}
			.subject {
				display: none;
			}
		}
	}
}






/**
 * Nano scroll stuff
*/

.nano {
	position : relative;
	width    : 100%;
	height   : 100%;
	overflow : hidden;
}
.nano > .nano-content {
	position      : absolute;
	overflow      : scroll;
	overflow-x    : hidden;
	top           : 0;
	right         : 0;
	bottom        : 0;
	left          : 0;
}
.nano > .nano-content:focus {
	outline: none;
}
.nano > .nano-content::-webkit-scrollbar {
	visibility: hidden;
}
.has-scrollbar > .nano-content::-webkit-scrollbar {
	visibility: visible;
}
.nano > .nano-pane {
	background : rgba(117, 117, 117, .2);
	position   : absolute;
	width      : 8px;
	right      : 8px;
	top        : 8px;
	bottom     : 8px;
	visibility : hidden\9; /* Target only IE7 and IE8 with this hack */
	opacity    : .01;
	-moz-border-radius    : 5px;
	-webkit-border-radius : 5px;
	border-radius         : 5px;
	-webkit-transition    : .3s;
	-moz-transition       : .3s;
	-o-transition         : .3s;
	transition            : .3s;
}
.nano > .nano-pane > .nano-slider {
	background: #444;
	background: #C7C7C7;
	position              : relative;
	-moz-border-radius    : 3px;
	-webkit-border-radius : 3px;
	border-radius         : 3px;
	-webkit-transition    : .3s;
	-moz-transition       : .3s;
	-o-transition         : .3s;
	transition            : .3s;
	-webkit-transition-property    : background;
	-moz-transition-property       : background;
	-o-transition-property         : background;
	transition-property            : background;
}
.nano > .nano-pane:hover > .nano-slider, .nano > .nano-pane.active > .nano-slider {
	background: #A6A6A6;
}

.nano:hover > .nano-pane, .nano-pane.active, .nano-pane.flashed {
	visibility : visible\9; /* Target only IE7 and IE8 with this hack */
	opacity    : 0.99;
}