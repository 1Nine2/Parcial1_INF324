namespace MVCRUD2.Models
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    [Table("Persons")]
    public partial class Person
    {
        [StringLength(50)]
        public string nombre { get; set; }

        [Key]
        public int ci { get; set; }

        [Column(TypeName = "date")]
        public DateTime? fecha { get; set; }

        public int? depto { get; set; }
    }
}
