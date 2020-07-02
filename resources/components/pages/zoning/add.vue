<template>
	<div>
		<div>
			<a-page-header :title="pageTitle" @back="() => $router.go(-1)">
				<template slot="Title">
					{{ this.$route.name == 'main' ? 'Dashboard' : this.$route.name }}
				</template>

				<template slot="extra">

					<a-button type="primary" @click="handleAdd">
						Add
					</a-button>

					<a-button type="primary" @click="handleAdd">
						Endorse
					</a-button>

					<a-button type="primary" @click="handleAdd">
						Approve
					</a-button>

				</template>

			</a-page-header>
		</div>

		<div>
			<a-form
				ref="ruleForm"
				:model="form"
				:rules="rules"
			>

				<a-row :gutter="18">
					<a-col
						class="gutter-row"
						:span="6"
						:style="{ display: 'block' }"
					>
						<a-form-item ref="name" label="Application Number: " prop="name">
							<a-input
								v-model="form.name"
								@blur="
									() => {
										$refs.name.onFieldBlur();
									}
								"
							/>
						</a-form-item>

						<a-form-item label="Date Applied" required prop="date1">
							<a-date-picker
								v-model="form.date1"
								show-time
								type="date"
								placeholder="Pick a date"
								style="width: 100%;"
							/>
						</a-form-item>

						<a-form-item ref="name" label="Name of Applicant: " prop="name">
							<a-input
								v-model="form.name"
								@blur="
									() => {
										$refs.name.onFieldBlur();
									}
								"
							/>
						</a-form-item>

						<a-form-item ref="name" label="Company Name: " prop="name">
							<a-input
								v-model="form.name"
								@blur="
									() => {
										$refs.name.onFieldBlur();
									}
								"
							/>
						</a-form-item>

						<a-form-item ref="name" label="Name of Authorized Representative: " prop="name">
							<a-input
								v-model="form.name"
								@blur="
									() => {
										$refs.name.onFieldBlur();
									}
								"
							/>
						</a-form-item>

						<a-form-item ref="name" label="Address of Corporation: " prop="name">
							<a-input
								v-model="form.name"
								@blur="
									() => {
										$refs.name.onFieldBlur();
									}
								"
							/>
						</a-form-item>


					</a-col>

					<a-col
						class="gutter-row"
						:span="6"
						:style="{ display: 'block' }"
					>

						<a-form-item ref="name" label="Property Identification Number(PIN): " prop="name">
							<a-input
								v-model="form.name"
								@blur="
									() => {
										$refs.name.onFieldBlur();
									}
								"
							/>
						</a-form-item>

						<a-form-item ref="name" label="Property Class: " prop="name">
							<a-input
								v-model="form.name"
								@blur="
									() => {
										$refs.name.onFieldBlur();
									}
								"
							/>
						</a-form-item>

						<a-form-item label="Type of Project: " prop="region">
							<a-select
								v-model="form.region"
								placeholder="please select your zone"
							>
								<a-select-option value="shanghai">Zone one</a-select-option>
								<a-select-option value="beijing">Zone two</a-select-option>
							</a-select>
						</a-form-item>

						<a-form-item label="Allowable Projects: " prop="region">
							<a-select
								v-model="form.region"
								placeholder="please select your zone"
							>
								<a-select-option value="shanghai">Zone one</a-select-option>
								<a-select-option value="beijing">Zone two</a-select-option>
							</a-select>
						</a-form-item>

						<a-form-item label="Nature of Projects: " prop="region">
							<a-select
								v-model="form.region"
								placeholder="please select your zone"
							>
								<a-select-option value="shanghai">Zone one</a-select-option>
								<a-select-option value="beijing">Zone two</a-select-option>
							</a-select>
						</a-form-item>

						<a-form-item ref="name" label="Location of Project: " prop="name">
							<a-input
								v-model="form.name"
								@blur="
									() => {
										$refs.name.onFieldBlur();
									}
								"
							/>
						</a-form-item>


					</a-col>

					<a-col
						class="gutter-row"
						:span="6"
						:style="{ display: 'block' }"
					>

						<a-form-item ref="name" label="Floor area of project occupied: " prop="name">
							<a-input
								v-model="form.name"
								@blur="
									() => {
										$refs.name.onFieldBlur();
									}
								"
								placeholder="(in square meters)"
							/>
						</a-form-item>

						<a-form-item ref="name" label="Land area of project: " prop="name">
							<a-input
								v-model="form.name"
								@blur="
									() => {
										$refs.name.onFieldBlur();
									}
								"
								placeholder="(in square meters)"
							/>
						</a-form-item>

						<a-form-item label="Right over land: " prop="region">
							<a-select
								v-model="form.region"
								placeholder="please select your zone"
							>
								<a-select-option value="shanghai">Zone one</a-select-option>
								<a-select-option value="beijing">Zone two</a-select-option>
							</a-select>
						</a-form-item>

						<a-form-item ref="name" label="Project Tenure: " prop="name">
							<a-input-group>
								<a-row :gutter="8">

									<a-col :span="12">
										<a-select default-value="Option1" style="width: 100%;">
											<a-select-option value="Option1">
											Option1
											</a-select-option>
											<a-select-option value="Option2">
											Option2
											</a-select-option>
										</a-select>
									</a-col>

									<a-col :span="12">
										<a-input default-value="" placeholder="Years"/>
									</a-col>

								</a-row>
							</a-input-group>
						</a-form-item>

						<a-form-item label="Barangay of project site: " prop="region">
							<a-select
								v-model="form.region"
								placeholder="please select your zone"
							>
								<a-select-option value="shanghai">Zone one</a-select-option>
								<a-select-option value="beijing">Zone two</a-select-option>
							</a-select>
						</a-form-item>

						<a-form-item label="Preferred mode of release of decision: " prop="region">
							<a-select
								v-model="form.region"
								placeholder="please select your zone"
							>
								<a-select-option value="shanghai">Zone one</a-select-option>
								<a-select-option value="beijing">Zone two</a-select-option>
							</a-select>
						</a-form-item>


					</a-col>

					<a-col
						class="gutter-row"
						:span="6"
						:style="{ display: 'block' }"
					>

						<a-form-item ref="name" label="Project Cost/Capitalization" prop="name">
							<a-input
								v-model="form.name"
								@blur="
									() => {
										$refs.name.onFieldBlur();
									}
								"
								placeholder="in pesos, write in words and in this field"
							/>
						</a-form-item>

						<a-form-item ref="name" label="Tax Declaration Number: " prop="name">
							<a-input
								v-model="form.name"
								@blur="
									() => {
										$refs.name.onFieldBlur();
									}
								"
							/>
						</a-form-item>

						<a-form-item ref="name" label="LZBA Declaration Number: " prop="name">
							<a-input
								v-model="form.name"
								@blur="
									() => {
										$refs.name.onFieldBlur();
									}
								"
							/>
						</a-form-item>

						<a-form-item ref="name" label="Files: " prop="name">
							<a-upload
								action="https://www.mocky.io/v2/5cc8019d300000980a055e76"
								:default-file-list="defaultFileList"
							>
								<a-button> <a-icon type="upload" /> Click to Upload </a-button>
							</a-upload>
						</a-form-item>


					</a-col>
				</a-row>

				<a-row :gutter="18">
					<a-col
						class="gutter-row"
						:span="24"
						:style="{ display: 'block' }"
						:offset="10"
					>
						<a-form-item>
							<a-button type="primary" @click="onSubmit">
								Save
							</a-button>

							<a-button style="margin-left: 10px;" @click="resetForm">
								Cancel
							</a-button>
						</a-form-item>
					</a-col>
				</a-row>

			</a-form>
		</div>

	</div>

</template>


<script>
import Helper from '../../../js/services/helper';

export default {
	created() {
		this.pageTitle = Helper.capitalizeFirstLetter(this.$route.name);
	},
	data() {
		return {
			defaultFileList: [
				{
				uid: '1',
				name: 'xxx.png',
				status: 'done',
				response: 'Server Error 500', // custom error message to show
				url: 'http://www.baidu.com/xxx.png',
				},
				{
				uid: '2',
				name: 'yyy.png',
				status: 'done',
				url: 'http://www.baidu.com/yyy.png',
				},
				{
				uid: '3',
				name: 'zzz.png',
				status: 'error',
				response: 'Server Error 500', // custom error message to show
				url: 'http://www.baidu.com/zzz.png',
				},
			],
			labelCol: { span: 9 },
			wrapperCol: { span: 18 },
			other: "",
			form: {
				name: "",
				region: undefined,
				date1: undefined,
				delivery: false,
				type: [],
				resource: "",
				desc: ""
			},
			rules: {
				name: [
					{
						required: true,
						message: "Please input Activity name",
						trigger: "blur"
					},
					{
						min: 3,
						max: 5,
						message: "Length should be 3 to 5",
						trigger: "blur"
					}
				],
				region: [
					{
						required: true,
						message: "Please select Activity zone",
						trigger: "change"
					}
				],
				date1: [
					{
						required: true,
						message: "Please pick a date",
						trigger: "change"
					}
				],
				type: [
					{
						type: "array",
						required: true,
						message: "Please select at least one activity type",
						trigger: "change"
					}
				],
				resource: [
					{
						required: true,
						message: "Please select activity resource",
						trigger: "change"
					}
				],
				desc: [
					{
						required: true,
						message: "Please input activity form",
						trigger: "blur"
					}
				]
			}
		};
	},
	methods: {
		onSubmit() {
			this.$refs.ruleForm.validate(valid => {
				if (valid) {
					alert("submit!");
				} else {
					console.log("error submit!!");
					return false;
				}
			});
		},
		resetForm() {
			this.$refs.ruleForm.resetFields();
		},
		 handleChange({ file, fileList }) {
			if (file.status !== 'uploading') {
				console.log(file, fileList);
			}
		},
	}
};
</script>
