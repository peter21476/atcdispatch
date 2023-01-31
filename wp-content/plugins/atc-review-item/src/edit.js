/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {
	useBlockProps,
	InspectorControls,
	MediaUpload,
} from "@wordpress/block-editor";
import {
	TextControl,
	Panel,
	PanelBody,
	Button,
	TextareaControl,
	__experimentalNumberControl as NumberControl,
} from "@wordpress/components";

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	function onChangeIcon(newIcon) {
		setAttributes({ reviewerImage: newIcon.sizes.full.url });
	}
	function onChangeNumber(number) {
		setAttributes({ numberOfStars: number });
	}
	return (
		<div {...useBlockProps()}>
			<InspectorControls key="setting">
				<Panel>
					<PanelBody>
						<TextControl
							className="blocks-base-control__input"
							label={"Reviewer Name"}
							value={attributes.reviewerName}
							onChange={(val) => setAttributes({ reviewerName: val })}
						/>
						<TextControl
							className="blocks-base-control__input"
							label={"Company Name"}
							value={attributes.companyName}
							onChange={(val) => setAttributes({ companyName: val })}
						/>
						<MediaUpload
							onSelect={onChangeIcon}
							type="image"
							value={attributes.reviewerImage}
							render={({ open }) => (
								<Button
									onClick={open}
									icon="upload"
									className="editor-media-placeholder__button is-button is-default is-large"
								>
									Reviewer Image
								</Button>
							)}
						/>
						<NumberControl
							isShiftStepEnabled={true}
							onChange={onChangeNumber}
							shiftStep={10}
							value={attributes.numberOfStars}
							max={5}
						/>
						<TextareaControl
							className="blocks-base-control__input"
							label={"Review text"}
							value={attributes.reviewText}
							onChange={(val) => setAttributes({ reviewText: val })}
						/>
					</PanelBody>
				</Panel>
			</InspectorControls>
			<div class="atc-select-wrapper">
				<img src={attributes.reviewerImage} />
				<p>{attributes.reviewerName}</p>
				<p>{attributes.companyName}</p>
				<p>{attributes.reviewText}</p>
			</div>
		</div>
	);
}
