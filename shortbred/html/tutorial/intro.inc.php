<h3>Chemically guided functional profiling</h3>

<p>
Chemically guided functional profiling (CGFP) maps metagenome protein abundance 
to clusters in sequence similarity networks generated by the EFI-EST web tool 
(<a href="https://efi.igb.illinois.edu/efi-est/">https://efi.igb.illinois.edu/efi-est/</a>).  
</p>

<p>
The glycyl radical enzyme (GRE) superfamily is functionally and mechanistically 
diverse with many uncharacterized members. CGFP was developed to focus 
experimental studies for assigning novel functions to uncharacterized members 
of the glycyl radical enzyme (GRE) superfamily that are detected in the human 
gut microbiome [<a href="https://dx.doi.org/10.1126/science.aai8386">B. J. Levin*,
Y. Y. Huang* et al. Science <b>355</b>, eaai8386  (2017)</a>].
CGFP provides a powerful approach to prioritizing uncharacterized 
members for functional assignment within protein families based on their 
abundance in metagenomes.
</p>

<p>
From the CGFP Tutorial on the Balskus laboratory website 
(<a href="https://www.microbialchemist.com/metagenomic-profiling/">https://www.microbialchemist.com/metagenomic-profiling/</a>):
</p>

<p style="margin-left: 25px">
"The human gut contains trillions of microbial inhabitants, making it one of 
the most densely populated environments on the planet. The symbiosis between 
these organisms and the human host is extremely complex, and we are only 
beginning to understand the impact of the gut microbiota on human biology. 
Knowledge of the chemical reactions performed and compounds produced by gut 
microbes will provide new insights into their roles in influencing human 
health. By studying the gene content of the human gut microbiome and the 
enzymes encoded by these genes, we hope to better understand the chemical 
capabilities of this microbial community. However, the activities of the vast 
majority of enzymes found in microbiomes are unknown.
</p>

<p style="margin-left: 25px">
We have developed a bioinformatics workflow to guide studies of genes and 
enzymes in microbiomes, including enzymes of unknown function. Our approach, 
which we call "chemically guided functional profiling", uses a molecular 
understanding of a large enzyme superfamily to guide the identification and 
quantitation of different family members in metagenomes and metatranscriptomes. 
To begin, a "sequence similarity network" (SSN) analysis is used to 
computationally divide a large number of enzyme sequences into groups that are 
likely to share the same activity. The quantitative metagenomics program 
ShortBRED can then identify short peptide markers that are unique to highly 
similar enzyme sequences and quantify the abundance of these markers in raw 
metagenomic datasets. The markers are then mapped back to clusters from the SSN 
to assess the abundance of individual enzymes in that metagenome. <b>Because this 
approach provides information about the relative abundance of enzyme family 
members with both known and unknown activities, it can provide new insights 
about important microbial functions and it can prioritize uncharacterized 
enzymes for further study based on their distribution and abundance in 
microbial communities.</b> We have used chemically guided functional profiling to 
identify members of the glycyl radical enzyme family in Human Microbiome 
Project sequencing datasets, and we anticipate that this approach will be 
readily extended to additional enzyme families and microbial communities."
</p>

<p>
In its original form, the CGFP pipeline described by Balskus and Huttenhower 
(<a href="https://bitbucket.org/biobakery/cgfp/overview">https://bitbucket.org/biobakery/cgfp/overview</a>)
required both knowledge of Unix 
command line programs and access to a computer cluster. <b>The EFI-CGFP web tool 
was developed to "democratize" the use of CGFP by experimentalists by making it 
both accessible and "user friendly".</b>
</p>

